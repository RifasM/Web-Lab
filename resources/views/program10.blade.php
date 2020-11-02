@extends('layout')

@section('title', 'Program 10')

@section('main-content')
    <div class="content">
        <div class="row flex-center m-b-md">
            <div class="col-md-11 m-b-md">
                <div class="title content">Program 10</div>
                <h3 class="content m-b-md">Aim: Write a PHP program to sort the student records which are stored in the
                    database using selection sort.</h3>
                @include('identity')
            </div>

            <h3 class="content">Current Date Time of Server</h3>
        </div>

        <!-- Student Record Program Starts -->
        <div class="row flex-center m-b-md">
            <div class="col-md-10 m-b-md">
                <?php
                $server = "localhost";
                $username = "root";
                $password = "root";
                $port = 3306;
                $dbname = "weblab";

                $conn = mysqli_connect($server, $username, $password, $dbname, $port);

                if ($conn->connect_error)
                    die("Connection failed: " . $conn->connect_error);
                $sql = "SELECT * FROM student";

                $a = [];
                ?>
            </div>
        </div>
        <!-- Student Record Program Ends -->

    </div>

@endsection
