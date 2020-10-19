@extends('layout')

@section('title', 'Program 6')

@section('main-content')
    <div class="content">
        <div class="row flex-center m-b-md">
            <div class="col-md-11 m-b-md">
                <div class="title content">Program 6</div>
                <h3 class="content m-b-md" style="text-align: left;">Aim: Write a PHP program named states.php that
                    declares a variable states with value "Mississippi Alabama Texas Massachusetts Kansas". write a PHP
                    program that does the following:
                    <ol type="a">
                        <li>
                            Search for a word in variable states that ends in xas. Store this word in element 0 of a
                            list named statesList.
                        </li>
                        <li>
                            Search for a word in states that begins with k and ends in s. Perform a case insensitive
                            comparison. [Note: Passing re.Ias a second parameter to method compile performs a
                            case-insensitive comparison.] Store this word in element1 of statesList.
                        </li>
                        <li>
                            Search for a word in states that begins with M and ends in s. Store this word in element 2
                            of the list.
                        </li>
                        <li>
                            Search for a word in states that ends in a. Store this word in element 3 of the list.
                        </li>
                    </ol>
                </h3>
                @include('identity')
            </div>
        </div>

        <!-- PHP regex Program Starts -->
        <div class="row flex-center m-b-md">
            <div class="col-md-5 m-b-md" style="text-align: left; padding-left: 10%;">

                <?php
                /*$a = [0=>"a", 1=>"b"]; // associative array $a[0]='a'; $a[1]='b';
                $b = ["a"=>0, "b"=>1]; // associative array $a['a']=0; $a['b']=1;

                $name = ["first"=>"mohammed", "last"=>"rifas"];
                foreach($name as $k=>$v){
                    echo "My Name is: ".$v."\n";
                }*/

                $states = "Mississippi Alabama Texas Massachusetts Kansas";
                $statesArray = explode(" ", $states); // converts string to array
                $statesList = array();

                echo "<h5>The Original Array is:</h5> <br>";
                foreach ($statesArray as $key => $value)
                    print("<strong>statesArray[$key]</strong> : <code>$value</code><br>");
                ?>
            </div>

            <div class="col-md-2"></div>

            <div class="col-md-5 m-b-md" style="text-align: left; padding-left: 10%;">
                <?php
                foreach ($statesArray as $value) {
                    if (preg_match("/.*xas$/", $value))
                        $statesList[0] = $value;

                    if (preg_match("/^k.*s$/i", $value))
                        $statesList[1] = $value;

                    if (preg_match("/^M.*s$/", $value))
                        $statesList[2] = $value;

                    if (preg_match("/.*s$/", $value))
                        $statesList[3] = $value;
                }

                echo "<h5>The modified Array is:</h5> <br>";
                foreach ($statesList as $key => $value)
                    print("<strong>stateList[$key]</strong> : <code>$value</code><br>");
                ?>
            </div>
        </div>
        <!-- PHP regex Program Ends -->

    </div>

@endsection
