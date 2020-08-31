@extends('layout')

@section('title', 'Program 3')

@section('main-content')
    <div class="content">
        <div class="row flex-center m-b-md">
            <div class="col-md-11 m-b-md">
                <div class="title content">Program 3</div>
                <h3 class="content m-b-md">Aim: Write a JavaScript code that displays text "TEXT-GROWING" with
                    increasing font size in the interval of 100ms in RED COLOR, when the font size reaches 50pt it
                    displays "TEXT-SHRINKING" in BLUE color. Then the font size decreases to 5pt.</h3>
                @include('identity')
            </div>

            <h3 class="content">Grow and shrinking Text</h3>
        </div>

        <!-- Growing Shrinking Program Starts -->
        <div class="row flex-center m-b-md">
            <form class="col-md-8 m-b-md" onsubmit="start(document.getElementById('string').value)">
                <div class="form-group m-b-md" style="text-align: left;">
                    <label for="string">Enter String:</label>
                    <input type="text" id="string" class="form-control m-b-md" placeholder="String" required>
                </div>
                <input type="button" class="btn btn-primary m-b-md" value="Repeat"
                       onclick="
                               start(document.getElementById('string').value)">
            </form>
            <h3 class="m-b-md col-md-8" id="text"></h3>
        </div>

        <!-- Growing Shrinking Program Ends -->

        <script src="{{asset('js/growingShrinking.js')}}" type="text/javascript"></script>
    </div>

@endsection
