@extends('layout')

@section('title', 'Program 5')

@section('main-content')
    <div class="content">
        <div class="row flex-center m-b-md">
            <div class="col-md-11 m-b-md">
                <div class="title content">Program 5</div>
                <h3 class="content m-b-md" style="text-align: left;">Aim: Design an XML document to store information
                    about a student in an engineering college affiliated to VTU. The information must include USN, Name,
                    and Name of the College, Branch, Year of Joining, and email id. Make up sample data for 3 students.
                    <br>
                    Create a CSS style sheet and use it to display the document.
                </h3>
                @include('identity')
            </div>

            <h3 class="content">Storing Student Information</h3>
        </div>

        <!-- XML Program Starts -->

        <div class="row flex-center m-b-md">
            <iframe width="100%" height="500px" src="{{asset('raw/program5.xml')}}"></iframe>
        </div>
        <!-- XML Program Ends -->

        <!-- XML Extra Program Starts -->
        <div class="row flex-center m-b-md">
            <h3 class="content m-b-md">Extra Program - Passengers</h3>
            <iframe width="100%" height="500px" src="{{asset('raw/program5-extra.xml')}}"></iframe>
        </div>
        <!-- XML Extra Program Ends -->

    </div>

@endsection
