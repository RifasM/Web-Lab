@extends('layout')

@section('title', 'Program 7')

@section('main-content')
    <div class="content">
        <div class="row flex-center m-b-md">
            <div class="col-md-11 m-b-md">
                <div class="title content">Program 7</div>
                <h3 class="content m-b-md">Aim: Write a PHP program to display a digital clock which displays the
                    current time of the server.</h3>
                @include('identity')
            </div>

            <h3 class="content">Current Date Time of Server</h3>
        </div>

        <!-- Date Time Program Starts -->
        <meta http-equiv="refresh" content="0.5">
        <div class="row m-b-md">
            <div class="col-md-10 m-b-md">
                <?php
                date_default_timezone_set("Asia/Kolkata");
                echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\"><strong>Datetime</strong>: " . date("l, F dS, Y  H : i : s : m : u   O") . "</h5>";
                ?>
            </div>
        </div>
        <!-- Date Time Program Ends -->

        <!-- Additional Date Time Formats Starts -->
        <div class="row flex-center m-b-md">
            <h3 class="content m-b-md">Additional Date Formats</h3>
            <div class="col-md-10 m-b-md">
                <?php
                echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\"><strong>Date</strong>: " . date("l, F dS, Y") . "</h5>";
                echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\"><strong>Short Date</strong>: " . date("D, jS-M-y") . "</h5>";
                echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\"><strong>Day of Year</strong>: " . date("z") . "</h5>";
                echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\"><strong>Numerical Representation of Day</strong>: " . date("N") . "</h5>";
                echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\"><strong>Numerical Representation of Month</strong>: " . date("m") . "</h5>";
                echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\"><strong>Time</strong>: " . date("h : i : s A") . "</h5>";
                echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\"><strong>Short Time</strong>: " . date("g : i a") . "</h5>";
                echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\"><strong>Time 24 Hour</strong>: " . date("H : i : s e") . "</h5>";
                ?>
            </div>
        </div>
        <!-- Additional Date Time Formats Ends -->

    </div>

@endsection
