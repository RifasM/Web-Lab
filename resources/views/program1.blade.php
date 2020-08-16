@extends('layout')

@section('title', 'Program 1')

@section('main-content')
    <div class="content">
        <div class="row flex-center m-b-mb">
            <div class="col-md-12 m-b-md">
                <div class="title content">Program 1</div>
                <h3 class="content m-b-md">Aim: Write a JavaScript to design a simple calculator to perform the
                    following operations: sum, product, difference and quotient.</h3>
                @include('identity')
            </div>

            <h3 class="content">Simple Calculator Program</h3>
        </div>
        <!-- Calculator Code Starts -->
        <link href="{{asset('css/calculator.css')}}" rel="stylesheet">
        <script src="{{asset('js/calculator.js')}}" type="text/javascript"></script>

        <div class="row">
            <div class="calculator card m-b-mb">
                <form onsubmit="compute()">
                    <input type="text" class="calculator-screen z-depth-1" value="" placeholder="0"/>

                    <div class="calculator-keys">

                        <button type="button" onclick="display(this.value)" class="operator btn btn-info" value="+">+
                        </button>
                        <button type="button" onclick="display(this.value)" class="operator btn btn-info" value="-">-
                        </button>
                        <button type="button" onclick="display(this.value)" class="operator btn btn-info" value="*">
                            &times;
                        </button>
                        <button type="button" onclick="display(this.value)" class="operator btn btn-info" value="/">
                            &divide;
                        </button>

                        <button type="button" onclick="display(this.value)" value="7"
                                class="btn btn-light waves-effect">7
                        </button>
                        <button type="button" onclick="display(this.value)" value="8"
                                class="btn btn-light waves-effect">8
                        </button>
                        <button type="button" onclick="display(this.value)" value="9"
                                class="btn btn-light waves-effect">9
                        </button>


                        <button type="button" onclick="display(this.value)" value="4"
                                class="btn btn-light waves-effect">4
                        </button>
                        <button type="button" onclick="display(this.value)" value="5"
                                class="btn btn-light waves-effect">5
                        </button>
                        <button type="button" onclick="display(this.value)" value="6"
                                class="btn btn-light waves-effect">6
                        </button>


                        <button type="button" onclick="display(this.value)" value="1"
                                class="btn btn-light waves-effect">1
                        </button>
                        <button type="button" onclick="display(this.value)" value="2"
                                class="btn btn-light waves-effect">2
                        </button>
                        <button type="button" onclick="display(this.value)" value="3"
                                class="btn btn-light waves-effect">3
                        </button>


                        <button type="button" onclick="display(this.value)" value="0"
                                class="btn btn-light waves-effect">0
                        </button>
                        <button type="button" onclick="display(this.value)" class="decimal function btn btn-secondary"
                                value=".">.
                        </button>
                        <button type="reset" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC
                        </button>

                        <button type="button" onclick="compute()" class="equal-sign operator btn btn-info" value="=">=
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Calculator Code Ends -->

@endsection

