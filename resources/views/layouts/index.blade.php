<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

    <meta charset="utf-8" />
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />

    <title>@yield('title')</title>

    <!-- Included CSS Files (Compressed) -->
    <link rel="stylesheet" href="{{asset('storage/stylesheets/foundation.min.css')}}">
    <link rel="stylesheet" href="{{asset('storage/stylesheets/main.css')}}">
    <link rel="stylesheet" href="{{asset('storage/stylesheets/app.css')}}">
    <link rel="stylesheet" href="{{asset('storage/stylesheets/app.css')}}">

    <script src="{{asset('storage/javascripts/modernizr.foundation.js')}}"></script>

    <link rel="stylesheet" href="{{asset('storage/fonts/ligature.css')}}">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />

    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<!-- ######################## Main Menu ######################## -->

<nav>

    <div class="twelve columns header_nav">
        <div class="row">

            <ul id="menu-header" class="nav-bar horizontal">

                <li><a href="/">Главная</a></li>
                <li><a href="/rubric/Искусственный интеллект">Искусственный интеллект</a></li>
                <li><a href="/rubric/Искусственная нейронная сеть">Искусственная нейронная сеть</a></li>
                <li><a href="/rubric/Распознавание образов">Распознавание образов</a></li>
                <li><a href="/rubric/Робототехника">Робототехника</a></li>
                <li><a href="/rubric/Информационное общество">Информационное общество</a></li>
                @if(Auth::user()->is_admin)
                    <li><a class="btn btn-success" href="{{ route('posts.create') }}">Добавить статью (ADMIN)</a></li>
                @endif
                <!--<li><a href="/rubric?rubric=Автоматическая обработка текста">Автоматическая обработка текста</a></li>-->
                <a href="/home" class="btn btn-primary">Аккаунт</a>
            </ul>



        </div>

    </div>

</nav><!-- END main menu -->

<!-- ######################## Header (featured posts) ######################## -->


<header>


    <div class="row">
        <h4>@yield('rubric')</h4>
        <article>

            <div class="twelve columns">
                <h1>@yield('header')</h1>
                <p class="excerpt">
                    @yield('lid')
                </p>
            </div>

        </article>


    </div>
</header>
<!-- ######################## Section ######################## -->
@yield('content')
<section>

    <div class="section_dark">
        <div class="row">

            <h2></h2>

            <div class="two columns">
                <img src="{{asset('storage/images/thumb1.jpg') }}" alt="desc">
            </div>

            <div class="two columns">
                <img src="{{asset('storage/images/thumb2.jpg')}}" alt="desc">
            </div>

            <div class="two columns">
                <img src="{{asset('storage/images/thumb3.jpg')}}" alt="desc">
            </div>

            <div class="two columns">
                <img src="{{asset('storage/images/thumb4.jpg')}}" alt="desc">
            </div>

            <div class="two columns">
                <img src="{{asset('storage/images/thumb5.jpg')}}" alt="desc">
            </div>

            <div class="two columns">
                <img src="{{asset('storage/images/thumb6.jpg')}}" alt="desc">
            </div>


        </div>
    </div>

</section>
<footer>

    <div class="row">

        <div class="twelve columns footer">
            <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="twitter">Twitter</a>
            <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="facebook">Facebook</a>
            <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="pinterest">Pinterest</a>
            <a href="" class="lsf-icon" style="font-size:16px" title="instagram">Instagram</a>
        </div>

    </div>

</footer>


<!-- Included JS Files (Compressed) -->
<script src="{{asset('storage/javascripts/foundation.min.js')}}" type="text/javascript"></script>
<!-- Initialize JS Plugins -->
<script src="{{asset('storage/javascripts/app.js')}}" type="text/javascript"></script>
</body>
</html>
