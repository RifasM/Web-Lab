@extends('layout')

@section('title', 'Program 4')

@section('main-content')
    <div class="content">
        <div class="row flex-center m-b-md">
            <div class="col-md-12 m-b-md">
                <div class="title content">Program 4</div>
                <h3 class="content m-b-md">Aim: Write a JavaScript that calculates the squares and cubes of the numbers
                    from 0 to 10
                    and outputs HTML text that displays the resulting values in an HTML table format.</h3>
                @include('identity')
            </div>

            <h3 class="content">Position of left most vowel</h3>
        </div>

        <!-- Vowel position Program Starts -->

        <div class="row flex-center m-b-md">
            <form class="col-md-8 m-b-md" onsubmit="vowel(document.getElementById('string').value)">
                <div class="form-group m-b-md" style="text-align: left;">
                    <label for="string">Enter String:</label>
                    <input type="text" id="string" class="form-control m-b-md" placeholder="String" required>
                </div>
                <input type="button" class="btn btn-primary m-b-md" value="Position"
                       onclick="
                               vowel(document.getElementById('string').value)">
            </form>
            <h3 class="m-b-md col-md-8" id="answer"></h3>
        </div>
        <!-- Vowel position Program Ends -->

        <!-- String reverse Program Starts -->

        <div class="row flex-center m-b-md">
            <form class="col-md-8 m-b-md" onsubmit="reverseNum(document.getElementById('number').value)">
                <div class="form-group m-b-md" style="text-align: left;">
                    <label for="val">Enter Value:</label>
                    <input type="number" id="val" class="form-control m-b-md" placeholder="Value" required>
                </div>
                <input type="button" class="btn btn-primary m-b-md" value="Reverse"
                       onclick="
                               reverseNum(document.getElementById('val').value)">
            </form>
            <h3 class="m-b-md col-md-8" id="reverse-answer"></h3>
        </div>

        <!-- Vowel position Program Ends -->

        <script src="{{asset('js/reverse.js')}}" type="text/javascript"></script>
    </div>

@endsection
