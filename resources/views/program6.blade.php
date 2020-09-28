@extends('layout')

@section('title', 'Program 6')

@section('main-content')
    <div class="content">
        <div class="row flex-center m-b-md">
            <div class="col-md-11 m-b-md">
                <div class="title content">Program 6</div>
                <h3 class="content m-b-md" style="text-align: left;">Aim: Write a PHP program to keep track of the
                    number of visitors visiting the web page and to display this count of visitors, with proper
                    headings.
                </h3>
                @include('identity')
            </div>

            <h3 class="content">Number of Visitors</h3>
        </div>

        <!-- PHP visitor Program Starts -->
        <div class="row flex-center m-b-md">
            <?php
            // ways to print
            /*
             * echo "hello\n";
             * echo("hello\n");
             * print "hello";
            */

            //variable declaration
            /*
             * $x = 10;
             * $y = 20;
             * print "the value of x is ".$x."\n";
             * dot(.) operator is used for concat
             * $z = $x + $y
             * print "The sum is :".$z."\n";
             *
             * var_dum($x); // to check datatype
             */

            // program starts
            $file = "raw/count.txt";

            $count = 0;
            $count = strval(file_get_contents($file)); // Retrieve file contents and save in string variable
            $count = (int)$count;

            file_put_contents($file, $count + 1);

            echo "<h3 class=\"col-md-8 content\">Visitor Count: " . $count . "</h3>"
            ?>
        </div>
        <!-- PHP visitor Program Ends -->

    </div>

@endsection
