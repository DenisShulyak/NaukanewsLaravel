@extends('layouts.index')

@section('title',$post['title'])
@section('rubric', $post['rubric'])
@section('header', $post['title'])
@section('lid', $post['lid'])
@section('content')

<section class="section_light">
    <div class="row">

        <p> <img src="{{asset('storage/images/'.$post['img'])}}" alt="desc" width=400 align=left hspace=30>

            {{$post['content']}}

        </p>

    </div>

</section>
@endsection
