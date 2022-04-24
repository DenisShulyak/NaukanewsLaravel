<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!\Auth::user()->is_admin){
            return abort(403);
        }
        //$posts = Post::pluck('rubric')();
        $rubrics = Post::select('rubric')->distinct()->pluck('rubric');
        //dd($rubrics);
        return view('add')->with(['rubrics'=>$rubrics]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(/*Request $request*/StorePostRequest $request)
    {
        if(!\Auth::user()->is_admin){
            return abort(403);
        }
        //$this->validate($request, ['Phone' => 'required|unique:person']);

        $file = $request->file('img');

        $upload_folder = 'public\images';
        $filename = $file->getFilename();

        Storage::putFileAs($upload_folder, $file, $filename);
        //$data = $request->except(['img']);
        $post = new Post();
        //$post->fill($data);
        $post->title = $request->input('title');
        $post->lid = $request->input('lid');
        $post->content = $request->input('content');
        $post->rubric = $request->input('rubric');
        $post->img = $filename;
        $post->save();
        /*Post::create([
            'title' => $request->input('title'),
            'lid' => $request->input('lid'),
            'content' => $request->input('content'),
            'rubric' => 'Робототехника',
            'img' => 'a10.jpg'
        ]);*/
        return redirect('');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!\Auth::user()->is_admin){
            return abort(403);
        }
        $post = Post::whereId($id)->first();
        $post->delete();
        return redirect('');
    }
}
