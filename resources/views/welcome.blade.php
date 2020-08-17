@extends('layout')

@section('title', 'Homepage')


@section('main-content')

<div class="content">
    <div class="title m-b-md">
        Web Lab 7th Sem Built on Laravel
    </div>

    @include('identity')

    <h3>
        Program List
    </h3>

    <div class="links">
        <a href="{{ url('program1')  }}">Program 1</a>
        <a href="{{ url('program2')  }}">Program 2</a>
        <!--a href="https://laravel.com/docs">Docs</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://blog.laravel.com">Blog</a>
        <a href="https://nova.laravel.com">Nova</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://vapor.laravel.com">Vapor</a>
        <a href="https://github.com/laravel/laravel">GitHub</a-->
    </div>
</div>

@endsection
