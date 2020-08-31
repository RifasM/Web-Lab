@extends('layout')

@section('title', 'Program 3')

@section('main-content')
    <div class="content">
        <div class="row flex-center m-b-md">
            <div class="col-md-12 m-b-md">
                <div class="title content">Program 2</div>
                <h3 class="content m-b-md">Aim: Write a JavaScript that calculates the squares and cubes of the numbers
                    from 0 to 10
                    and outputs HTML text that displays the resulting values in an HTML table format.</h3>
                @include('identity')
            </div>

            <h3 class="content">Grow and shrinking Text</h3>
        </div>

        <!-- Growing Shrinking Program Starts -->

        <div class="row flex-center m-b-md">
            <form class="col-md-8 m-b-md">
                <div class="form-group m-b-md" style="text-align: left;">
                    <label for="square-cube">Enter String:</label>
                    <input type="number" id="square-cube" class="form-control m-b-md" placeholder="Value" required>
                </div>
                <input type="button" class="btn btn-primary m-b-md" value="Calculate"
                       onclick="
                               count(document.getElementById('square-cube').value)">
            </form>
        </div>

        <div id="text">

        </div>

        <!-- Growing Shrinking Program Ends -->

        <script src="{{asset('js/growingShrinking.js')}}" type="text/javascript"></script>
    </div>

@endsection
