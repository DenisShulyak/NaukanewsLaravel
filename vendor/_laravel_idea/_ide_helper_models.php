<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
/** @noinspection PhpUnusedAliasInspection */

namespace App\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Post_C;
    use LaravelIdea\Helper\App\Models\_IH_Post_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @method static _IH_Post_QB onWriteConnection()
     * @method _IH_Post_QB newQuery()
     * @method static _IH_Post_QB on(null|string $connection = null)
     * @method static _IH_Post_QB query()
     * @method static _IH_Post_QB with(array|string $relations)
     * @method _IH_Post_QB newModelQuery()
     * @method static _IH_Post_C|Post[] all()
     * @mixin _IH_Post_QB
     */
    class Post extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method static _IH_User_C|User[] all()
     * @mixin _IH_User_QB
     */
    class User extends Model {}
}

namespace Illuminate\Notifications {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property Model $notifiable
     * @method MorphTo notifiable()
     * @method static _IH_DatabaseNotification_QB onWriteConnection()
     * @method _IH_DatabaseNotification_QB newQuery()
     * @method static _IH_DatabaseNotification_QB on(null|string $connection = null)
     * @method static _IH_DatabaseNotification_QB query()
     * @method static _IH_DatabaseNotification_QB with(array|string $relations)
     * @method _IH_DatabaseNotification_QB newModelQuery()
     * @method static _IH_DatabaseNotification_C|DatabaseNotification[] all()
     * @mixin _IH_DatabaseNotification_QB
     */
    class DatabaseNotification extends Model {}
}

namespace Laravel\Passport {

    use App\Models\User;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Support\Carbon;
    use Laravel\Passport\Database\Factories\ClientFactory;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_AuthCode_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_AuthCode_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Client_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Client_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_PersonalAccessClient_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_PersonalAccessClient_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_RefreshToken_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_RefreshToken_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Token_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Token_QB;
    
    /**
     * @property string $id
     * @property int $user_id
     * @property string $client_id
     * @property string|null $scopes
     * @property bool $revoked
     * @property Carbon|null $expires_at
     * @method static _IH_AuthCode_QB onWriteConnection()
     * @method _IH_AuthCode_QB newQuery()
     * @method static _IH_AuthCode_QB on(null|string $connection = null)
     * @method static _IH_AuthCode_QB query()
     * @method static _IH_AuthCode_QB with(array|string $relations)
     * @method _IH_AuthCode_QB newModelQuery()
     * @method static _IH_AuthCode_C|AuthCode[] all()
     * @mixin _IH_AuthCode_QB
     */
    class AuthCode extends Model {}
    
    /**
     * @property string $id
     * @property int|null $user_id
     * @property string $name
     * @property string|null $secret
     * @property string|null $provider
     * @property string $redirect
     * @property bool $personal_access_client
     * @property bool $password_client
     * @property bool $revoked
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read null|string $plain_secret
     * @method static _IH_Client_QB onWriteConnection()
     * @method _IH_Client_QB newQuery()
     * @method static _IH_Client_QB on(null|string $connection = null)
     * @method static _IH_Client_QB query()
     * @method static _IH_Client_QB with(array|string $relations)
     * @method _IH_Client_QB newModelQuery()
     * @method static _IH_Client_C|Client[] all()
     * @mixin _IH_Client_QB
     * @method static ClientFactory factory(...$parameters)
     */
    class Client extends Model {}
    
    /**
     * @property int $id
     * @property string $client_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_PersonalAccessClient_QB onWriteConnection()
     * @method _IH_PersonalAccessClient_QB newQuery()
     * @method static _IH_PersonalAccessClient_QB on(null|string $connection = null)
     * @method static _IH_PersonalAccessClient_QB query()
     * @method static _IH_PersonalAccessClient_QB with(array|string $relations)
     * @method _IH_PersonalAccessClient_QB newModelQuery()
     * @method static _IH_PersonalAccessClient_C|PersonalAccessClient[] all()
     * @mixin _IH_PersonalAccessClient_QB
     */
    class PersonalAccessClient extends Model {}
    
    /**
     * @property string $id
     * @property string $access_token_id
     * @property bool $revoked
     * @property Carbon|null $expires_at
     * @method static _IH_RefreshToken_QB onWriteConnection()
     * @method _IH_RefreshToken_QB newQuery()
     * @method static _IH_RefreshToken_QB on(null|string $connection = null)
     * @method static _IH_RefreshToken_QB query()
     * @method static _IH_RefreshToken_QB with(array|string $relations)
     * @method _IH_RefreshToken_QB newModelQuery()
     * @method static _IH_RefreshToken_C|RefreshToken[] all()
     * @mixin _IH_RefreshToken_QB
     */
    class RefreshToken extends Model {}
    
    /**
     * @property string $id
     * @property int|null $user_id
     * @property string $client_id
     * @property string|null $name
     * @property array|null $scopes
     * @property bool $revoked
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $expires_at
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Token_QB onWriteConnection()
     * @method _IH_Token_QB newQuery()
     * @method static _IH_Token_QB on(null|string $connection = null)
     * @method static _IH_Token_QB query()
     * @method static _IH_Token_QB with(array|string $relations)
     * @method _IH_Token_QB newModelQuery()
     * @method static _IH_Token_C|Token[] all()
     * @mixin _IH_Token_QB
     */
    class Token extends Model {}
}

namespace Laravel\Sanctum {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB;
    
    /**
     * @property int $id
     * @property int $tokenable_id
     * @property string $tokenable_type
     * @property string $name
     * @property string $token
     * @property array|null $abilities
     * @property Carbon|null $last_used_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $tokenable
     * @method MorphTo tokenable()
     * @method static _IH_PersonalAccessToken_QB onWriteConnection()
     * @method _IH_PersonalAccessToken_QB newQuery()
     * @method static _IH_PersonalAccessToken_QB on(null|string $connection = null)
     * @method static _IH_PersonalAccessToken_QB query()
     * @method static _IH_PersonalAccessToken_QB with(array|string $relations)
     * @method _IH_PersonalAccessToken_QB newModelQuery()
     * @method static _IH_PersonalAccessToken_C|PersonalAccessToken[] all()
     * @mixin _IH_PersonalAccessToken_QB
     */
    class PersonalAccessToken extends Model {}
}