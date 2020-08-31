@extends('layout')

@section('title', 'Homepage')


@section('main-content')

<div class="content" style="margin-top: 15%;">
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
        <a href="{{ url('program3')  }}">Program 3</a>
        <a href="{{ url('program4')  }}">Program 4</a>
    </div>
</div>

@endsection
