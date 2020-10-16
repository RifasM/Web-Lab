@extends('layout')

@section('title', 'Program 9')

@section('main-content')
    <div class="content">
        <div class="row flex-center m-b-md">
            <div class="col-md-11 m-b-md">
                <div class="title content">Program 9</div>
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
                            comparison. [Note: Passing re.I as a second parameter to method compile performs a
                            case-insensitive comparison.] Store this word in element 1 of statesList.
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
                foreach (array_values($statesList) as $i => $value)
                    print("<strong>statesalList[$i]</strong> : <code>$value</code><br>");
                ?>
            </div>
        </div>
        <!-- PHP regex Program Ends -->

        <hr>

        <!-- USN extra Program Starts -->
        <div class="row flex-center m-b-md">
            <div class="col-md-5 m-b-md">
                <h3 class="content m-b-md">USN validator</h3>
                <form method="POST">
                    @csrf
                    <div class="form-group m-b-md" style="text-align: left;">
                        <label for="usn">Enter USN:</label>
                        <input placeholder="USN" type="text" id="usn" class="form-control m-b-md" name="usn" required>
                    </div>
                    <input type="submit" class="btn btn-outline-primary m-b-md" name="check" value="Check">
                </form>

                <?php
                if (isset($_POST["check"])) {
                    $usn = $_POST["usn"];
                    if (preg_match("/[1-4][A-Z]{2}\d{2}[A-Z]{2}\d{3}/", $usn))
                        echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb text-success\">USN: <small>" . $usn . "</small> is Valid</h5>";
                    else
                        echo "<h5 style=\"text-align: left; margin-left: 20%;\" class=\"m-b-mb text-warning\">USN: <small>" . $usn . "</small> is Invalid</h5>";
                }
                ?>
            </div>
        </div>
        <!-- USN extra Program Ends -->

    </div>

@endsection
