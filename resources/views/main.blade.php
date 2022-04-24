@extends('layouts.index')

@section('title','Новости науки')
@section('rubric', '')
@section('header', 'Новости науки')
@section('lid', '')
@section('content')
    <section>

        <div class="section_main">

            <div class="row">

                <section class="eight columns">
                    @foreach($data as $value)
                        <article class="blog_post">

                            <div class="three columns">
                                <a href="#" class="th"><img src="{{asset('storage/images/'.$value['img'])}}" alt="desc" /></a>
                            </div>
                            <div class="nine columns">
                                <a href="/statya/{{$value['id']}}"><h4>{{$value['title']}}</h4></a>
                                <p>{{$value['lid']}}</p>
                            </div>

                            @if(Auth::user()->is_admin)
                                <div class="nine columns">
                                <form action="{{ route('posts.destroy',$value->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button style="display: inline-block;
	box-sizing: border-box;
	padding: 0 20px;
	margin: 0 15px 15px 0;
	outline: none;
	border: none;
	border-radius: 4px;
	height: 32px;
	line-height: 32px;
	font-size: 14px;
	font-weight: 500;
	text-decoration: none;
	color: #fff;
	background-color: #3775dd;
	box-shadow: 0 2px #21487f;
	cursor: pointer;
	user-select: none;
	appearance: none;
	touch-action: manipulation;
	vertical-align: top;" class="btn btn-primary" type="submit">Delete</button>

                                </form>
                                </div>
                            @endif
                        </article>
                    @endforeach
                </section>
            </div>

        </div>

    </section>
@endsection
