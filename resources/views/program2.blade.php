@extends('layout')

@section('title', 'Program 2')

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

            <h3 class="content">Square and Cube Calculator</h3>
        </div>

        <!-- Counting Program Starts -->

        <div class="row flex-center m-b-md">
            <form class="col-md-8 m-b-md">
                <div class="form-group m-b-md" style="text-align: left;">
                    <label for="square-cube">Enter Value:</label>
                    <input type="number" id="square-cube" class="form-control m-b-md" placeholder="Value" required>
                </div>
                <input type="button" class="btn btn-primary m-b-md" value="Calculate"
                       onclick="
                               count(document.getElementById('square-cube').value)">
            </form>
            <table class="col-md-8 table table-dark">
                <thead>
                <tr>
                    <td>Number</td>
                    <td>Square</td>
                    <td>Cube</td>
                </tr>
                </thead>
                <tbody id="counter-content">

                </tbody>
            </table>
        </div>

        <!-- Counting Program Ends -->


        <!-- Extra Part Starts -->
        <div class="row flex-center m-b-md">
            <div class="title content">Root of Quadratic Equation</div>
            <form class="col-md-8 m-b-md">
                <div class="form-group m-b-md" style="text-align: left;">
                    <label for="quad-a">Enter Coefficient a:</label>
                    <input type="number" id="quad-a" class="form-control m-b-md" placeholder="Coefficient a" required>
                </div>
                <div class="form-group m-b-md" style="text-align: left;">
                    <label for="quad-b">Enter Coefficient b:</label>
                    <input type="number" id="quad-b" class="form-control m-b-md" placeholder="Coefficient b" required>
                </div>
                <div class="form-group m-b-md" style="text-align: left;">
                    <label for="quad-c">Enter Coefficient c:</label>

                    <input type="number" id="quad-c" class="form-control m-b-md" placeholder="Coefficient c" required>
                </div>

                <input type="button" class="btn btn-primary" value="Calculate"
                       onclick="
                               calc_quad(document.getElementById('quad-a').value,
                               document.getElementById('quad-b').value,
                               document.getElementById('quad-c').value)">
            </form>
            <h3 class="m-b-md col-md-8" id="extra-answer"></h3>
        </div>
        <!-- Extra Part Ends -->

        <!-- Multiplication Tables Starts-->
        <div class="row">

        </div>
        <!-- Multiplication Tables Ends-->

        <script src="{{asset('js/counter.js')}}" type="text/javascript"></script>
    </div>

@endsection
