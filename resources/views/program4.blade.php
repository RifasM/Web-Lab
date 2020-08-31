@extends('layout')

@section('title', 'Program 4')

@section('main-content')
    <div class="content">
        <div class="row flex-center m-b-md">
            <div class="col-md-11 m-b-md">
                <div class="title content">Program 4</div>
                <h3 class="content m-b-md" style="text-align: left;">Aim: Develop and demonstrate a HTML5 file that
                    includes JavaScript script that uses functions for the following problems:
                    <ol type="a">
                        <li>
                            Parameter: A string
                            <br>
                            Output: The position in the string of the left-most vowel
                        </li>
                        <li>
                            Parameter: A number
                            <br>
                            Output: The number with its digits in the reverse order
                        </li>
                    </ol>
                </h3>
                @include('identity')
            </div>

            <h3 class="content">4.a Position of left most vowel</h3>
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
            <h3 class="col-md-8 content">4.b Reverse of a number</h3>
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
