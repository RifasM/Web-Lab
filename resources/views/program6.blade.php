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

            echo "<h5 class=\"col-md-8 content\">Visitor Count: <strong>" . $count . "</strong></h5>";
            ?>
        </div>
        <!-- PHP visitor Program Ends -->

        <hr>

        <!-- Extra Program Starts -->
        <h3 class="content m-b-md">File Operations - Extra Program</h3>
        <div class="row flex-center m-b-md">

            <?php
            $infile = "raw/program6_input.txt";

            $data = strval(file_get_contents($infile));
            ?>
            <div class="col-md-11 m-b-md">
                <?php
                echo "<h4 class=\"content\">Initial Contents of Input File:</h4>";
                echo "<p class=\"content m-b-mb\"><code>" . $data . "</code></p>";
                ?>
            </div>
            <div class="col-md-11 m-b-md">
                <h4 class="content m-b-md">String Operations</h4>
                <div class="content m-b-md">
                    <?php
                    $len = strlen($data);
                    $rev = strrev($data);
                    $low = strtolower($data);
                    $upp = strtoupper($data);
                    $subs = substr($data, 5);
                    $random = str_shuffle($data);

                    echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\">Input file content length: <strong>" . $len . "</strong></h5>";
                    echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\">Input file Lower Case: <strong>" . $low . "</strong></h5>";
                    echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\">Input file Upper Case: <strong>" . $upp . "</strong></h5>";
                    echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\">Input file first 5 Characters Skipped (Substring): <strong>" . $subs . "</strong></h5>";
                    echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\">Input file random shuffle: " . $random . "</h5>";
                    echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb\"> Reversed Contents: <code>" . $rev . "</code></h5>";

                    file_put_contents($infile, $len . "\n" . $low . "\n" . $upp . "\n" . $subs . "\n" . $random . "\n" . $rev)
                    ?>
                </div>
            </div>
        </div>
        <!-- Extra Program Ends -->

    </div>

@endsection
