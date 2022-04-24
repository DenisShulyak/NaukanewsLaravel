<?php

namespace App\Http\Controllers;

use App\Models\Post;
use http\Exception\InvalidArgumentException;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        if(!\Auth::check()){
            return redirect()->route('home');
        }
        $posts = Post::find(3)->get();
        return view('main')->with(['data'=>$posts]);
    }

    public function rubric($rubric){
        if(!\Auth::check()){
            return redirect()->route('home');
        }
        $posts = Post::whereRubric($rubric)->get();
        if(count($posts) === 0){
            return abort(404);
        }
        return view('rubric')->with(['data'=>$posts, 'title'=>$rubric]);
    }

    public function get_post($id){
        if(!\Auth::check()){
            return redirect()->route('home');
        }
        $post = Post::whereId($id)->first();
        if(!$post){
            return abort(404);
        }
        return view('post')->with(['post'=>$post]);
    }
}
