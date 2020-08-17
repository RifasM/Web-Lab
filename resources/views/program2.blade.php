@extends('layout')

@section('title', 'Program 2')

@section('main-content')
    <div class="content">
        <div class="row flex-center m-b-mb">
            <div class="col-md-12 m-b-md">
                <div class="title content">Program 2</div>
                <h3 class="content m-b-md">Aim: Write a JavaScript to design a simple calculator to perform the
                    following operations: sum, product, difference and quotient.</h3>
                @include('identity')
            </div>

            <h3 class="content">Simple Calculator</h3>
        </div>

        <!-- Counting Program Starts -->

        <div class="row flex-center m-b-mb">
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
        <div class="row flex-center m-b-mb">
            <h3>Root of Quadratic</h3>
            <div class="col-md-12" id="extra-answer"></div>
        </div>
        <!-- Extra Part Ends -->

        <!-- Multiplication Tables Starts-->
        <div class="row">

        </div>
        <!-- Multiplication Tables Ends-->

        <script src="{{asset('js/counter.js')}}" type="text/javascript"></script>
    </div>

@endsection
