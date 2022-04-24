<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    protected $clientId;
    protected $clientSecret;

    public function __construct()
    {
        $this->middleware('auth')->except('login', 'register', 'refresh');
        // Использовать режим пароля ключ сервера может иметь несколько
        // Здесь следует записать кеш, или записать его в файл конфигурации
        $client = \DB::table('oauth_clients')->where('id', 2)->first();
        $this->clientId = $client->id;
        $this->clientSecret = $client->secret;
    }

    /**
     * Определите поле поиска пользователя
     */
    protected function username()
    {
        return 'phone';
    }

    /**
     * Получите токен
     */

    private function getToken($phone, $password)
    {
        $response = null;
        try {
            $response = (new Client())->post(url('/oauth/token'), [
                'form_params' => [
                    'grant_type' => 'password',
                    'username' => $phone,
                    'password' => $password,
                    'client_id' => $this->clientId,
                    'client_secret' => $this->clientSecret,
                    'scope' => '*',				// Домен полномочий пользователя * означает, что доступны все домены
                ],
            ]);
        } catch (RequestException $e) {
            return json_encode(['code' => 401, 'msg' => "Не удалось войти в учетную запись! Пожалуйста, попробуйте еще раз!"]);
        }

        if($response->getStatusCode() == 401) {
            return json_encode(['code' => 401, 'msg' => "Не удалось войти в учетную запись! Пожалуйста, попробуйте еще раз!"]);
        }

        return json_encode(['code' => 200, 'data' => json_decode((string) $response->getBody(), true)]);
    }

    /**
     * Регистрация пользователя
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // Получаем ввод пользователя
        $input = $request->all();

        // Правила проверки формы
        $rule = [
            'phone' => 'required|digits:11|numeric',
            'password' => 'required|between:8,20',
        ];

        $msg = [
            'phone.required'    => 'wrongPhone',
            'phone.digits'      => 'wrongPhone',
            'phone.numeric'     => 'wrongPhone',
            'password.required' => 'wrongPw',
            'password.between'  => 'wrongPw',
        ];

        $validator = Validator::make($input, $rule, $msg);

        // Регистрационная информация неверна
        if($validator->fails()){
            // Возвращаем первую ошибку
            return response()->json(['code'=>202, 'msg'=>$validator->errors()->first()]);
        }


        // Проверяем, есть ли дубликаты
        $res = User::where($this->username(), '=', $input['phone'])->first();

        if($res != null) {

            return response()->json(['code'=>202, 'msg'=>'hadUser', 'user'=>$res]);

        }
        else {

            User::query()->create(['phone'=>$input['phone'], 'password'=>password_hash($input['password'], PASSWORD_DEFAULT)]);

            $tokenData = json_decode((string)$this->getToken($input['phone'], $input['password']), true);

            if($tokenData['code'] != 200) {
                return response()->json(['code' => 401, 'msg' => "Ошибка аутентификации при входе, попробуйте еще раз!"]);
            }

            $tokenData = $tokenData['data']['token_type'] . ' ' . $tokenData['data']['access_token'];

            return response()
                ->json(['code'=>200, 'msg'=>'success'])
                ->header('Authorization', $tokenData);
        }
    }
}
