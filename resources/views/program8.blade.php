@extends('layout')

@section('title', 'Program 8')

@section('main-content')
    <div class="content">
        <div class="row flex-center m-b-md">
            <div class="col-md-11 m-b-md">
                <div class="title content">Program 8</div>
                <h5 class="content m-b-md" style="text-align: left;">Aim: Write the PHP programs to do the following:
                    <ol type="a">
                        <li>
                            Implement simple calculator operations.
                        </li>
                        <li>
                            Find the transpose of a matrix.
                        </li>
                        <li>
                            Multiplication of two matrices.
                        </li>
                        <li>
                            Addition of two matrices.
                        </li>
                    </ol>
                </h5>
                @include('identity')
            </div>
        </div>

        <!-- Calculator Program Starts -->
        <div class="row flex-center m-b-md">
            <form class="col-md-4 m-b-md" method="POST">
                @csrf
                <h3 class="content m-b-md">8.a Implement simple calculator operations.</h3>

                <label for="num1">Enter Number 1:</label>
                <input type="number" id="num1" class="form-control m-b-md" name="num1" placeholder="Number 1" required>

                <label for="num2">Enter Number 2:</label>
                <input type="number" id="num2" class="form-control m-b-md" name="num2" placeholder="Number 2" required>

                <input type="submit" class="btn btn-primary m-b-md" name="calculate" value="Calculate">

            </form>
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <?php
                if (isset($_POST["calculate"])) {
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    if (is_numeric($num1) && is_numeric($num2)) {
                        echo "<h5 class=\"content m-b-md\" style=\"text-align: left; margin-left: 20%;\"><strong>Addition</strong>: " . ($num1 + $num2) . "</h5>";
                        echo "<h5 class=\"content m-b-md\" style=\"text-align: left; margin-left: 20%;\"><strong>Subtraction</strong>: " . ($num1 - $num2) . "</h5>";
                        echo "<h5 class=\"content m-b-md\" style=\"text-align: left; margin-left: 20%;\"><strong>Multiplication</strong>: " . ($num1 * $num2) . "</h5>";
                        if ($num2 != 0)
                            echo "<h5 class=\"content m-b-md\" style=\"text-align: left; margin-left: 20%;\"><strong>Division</strong>: " . ($num1 / $num2) . "</h5>";
                        else
                            echo "<h5 class=\"content m-b-md\" style=\"text-align: left; margin-left: 20%;\">Division by Zero not allowed</h5>";
                    } else {
                        echo "<h5 class=\"content m-b-md\" style=\"text-align: left; margin-left: 20%;\">Not a valid input</h5>";
                    }
                }
                ?>
            </div>
        </div>
        <!-- Calculator Program Ends -->

        <!-- Array program Start -->
        <div class="row flex-center m-b-md">
            <div class="col-md-12 m-b-md">
                <?php
                $a = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
                $b = array(array(3, 2, 1), array(6, 5, 4), array(9, 8, 7));

                $m = count($a);
                $n = count($a[1]);

                $p = count($b);
                $q = count($b[1]);
                ?>
                <div class="row m-b-md">
                    <div class="col-md-3">
                        <h4 class="content m-b-md">Matrix A is: </h4>
                    </div>
                    <div class="col-md-3">
                        <code>
                            <?php
                            for ($r = 0; $r < $m; $r++) {
                                for ($c = 0; $c < $n; $c++)
                                    echo " " . $a[$r][$c];
                                echo "<br>";
                            }
                            ?>
                        </code>
                    </div>

                    <div class="col-md-3">
                        <h4 class="content m-b-md">Matrix B is: </h4>
                    </div>
                    <div class="col-md-3">
                        <code>
                            <?php
                            for ($r = 0; $r < $p; $r++) {
                                for ($c = 0; $c < $q; $c++)
                                    echo " " . $b[$r][$c];
                                echo "<br>";
                            }
                            ?>
                        </code>
                    </div>
                </div>

                <div class="row m-b-md">
                    <div class="col-md-3">
                        <h4 class="content m-b-md">8.b Transpose of Matrix A is: </h4>
                    </div>
                    <div class="col-md-3">
                        <code>
                            <?php
                            for ($r = 0; $r < $n; $r++) {
                                for ($c = 0; $c < $m; $c++)
                                    echo " " . $a[$c][$r];
                                echo "<br>";
                            }
                            ?>
                        </code>
                    </div>

                    <div class="col-md-3">
                        <h4 class="content m-b-md">8.b Transpose of Matrix B is: </h4>
                    </div>
                    <div class="col-md-3">
                        <code>
                            <?php
                            for ($r = 0; $r < $p; $r++) {
                                for ($c = 0; $c < $q; $c++)
                                    echo " " . $b[$c][$r];
                                echo "<br>";
                            }
                            ?>
                        </code>
                    </div>
                </div>

                <div class="row m-b-md">
                    <div class="col-md-3">
                        <h4 class="content m-b-md">8.c Multiplication of two matrices.</h4>
                    </div>
                    <div class="col-md-3">
                        <code>
                            <?php
                            if ($m == $p && $n == $q) {
                                $mul = array();
                                for ($r = 0; $r < $n; $r++) {
                                    for ($c = 0; $c < $m; $c++) {
                                        $mul[$r][$c] = 0;
                                        for ($k = 0; $k < $n; $k++)
                                            $mul[$r][$c] += $a[$r][$k] * $b[$k][$c];
                                        echo " " . $mul[$r][$c];
                                    }
                                    echo "<br>";
                                }
                            }
                            ?>
                        </code>
                    </div>

                    <div class="col-md-3">
                        <h4 class="content m-b-md">8.d Addition of two matrices.</h4>
                    </div>
                    <div class="col-md-3">
                        <code>
                            <?php
                            if ($m == $p && $n == $q) {
                                for ($r = 0; $r < $n; $r++) {
                                    for ($c = 0; $c < $m; $c++)
                                        echo " " . ($a[$r][$c] + $b[$r][$c]);
                                    echo "<br>";
                                }
                            }
                            ?>
                        </code>
                    </div>
                </div>
            </div>
        </div>
        <!-- Array program Ends -->

        <hr>

        <!-- length conversion program starts -->
        <?php
        if (isset($_POST["from"])) {
            $from = $_POST["from"];
            $from_drop = $_POST["from_drop"];
            $to_drop = $_POST["to_drop"];
            switch ($from_drop) {
                case 1:
                    $cm = 1;
                    $me = 0.01;
                    $km = 0.00001;
                    $ft = 0.3280839;
                    $in = 0.39370078;
                    $mi = 0.000006213;
                    $ya = 0.010936132;
                    break;
                case 2:
                    $cm = 100;
                    $me = 1;
                    $km = 0.001;
                    $ft = 3.280839;
                    $in = 39.370078;
                    $mi = 0.00062137;
                    $ya = 1.0936132;
                    break;
                case 3:
                    $cm = 100000;
                    $me = 1000;
                    $km = 1;
                    $ft = 3280.839;
                    $in = 39370.078;
                    $mi = 0.6213;
                    $ya = 1093.6132;
                    break;
                case 4:
                    $cm = 30.48;
                    $me = 0.3048;
                    $km = 0.0003048;
                    $ft = 1;
                    $in = 12;
                    $mi = 0.00018939;
                    $ya = 0.33333;
                    break;
                case 5:
                    $cm = 2.54;
                    $me = 0.0254;
                    $km = 0.0000254;
                    $ft = 0.083333;
                    $in = 1;
                    $mi = 0.0000157828;
                    $ya = 0.027778;
                    break;
                case 6:
                    $cm = 160934.4;
                    $me = 1609.344;
                    $km = 1.609344;
                    $ft = 5280;
                    $in = 63360;
                    $mi = 1;
                    $ya = 1760;
                    break;
                case 7:
                    $cm = 91.44;
                    $me = 0.9144;
                    $km = 0.0009144;
                    $ft = 3;
                    $in = 36;
                    $mi = 0.000568181;
                    $ya = 1;
                    break;
            }

            $res = 0;

            switch ($to_drop) {
                case 1:
                    $res = $from * $cm;
                    break;
                case 2:
                    $res = $from * $me;
                    break;
                case 3:
                    $res = $from * $km;
                    break;
                case 4:
                    $res = $from * $ft;
                    break;
                case 5:
                    $res = $from * $in;
                    break;
                case 6:
                    $res = $from * $mi;
                    break;
                case 7:
                    $res = $from * $ya;
                    break;
            }
        }
        ?>

        <form method="post">
            @csrf
            <h3 class="content m-b-md">Extra Program - Type Conversion</h3>
            <div class="row flex-center m-b-md">
                <div class="col-md-6 m-b-md" style="text-align: left;">
                    <label for="from">Input Value:</label>
                    <label for="from_drop"></label>
                    <div class="row">
                        <div class="col-md-5">
                            <input type="number" class="form-control m-b-md"
                                   value="<?php echo isset($from) ? $from : ''; ?>" id="from" name="from"
                                   placeholder="Input Value">
                        </div>
                        <div class="col-md-5">
                            <select class="form-control" id="from_drop" name="from_drop">
                                <option value=1>Centimeter</option>
                                <option value=2>Meter</option>
                                <option value=3>Kilometer</option>
                                <option value=4>Feet</option>
                                <option value=5>Inch</option>
                                <option value=6>Miles</option>
                                <option value=7>Yards</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 m-b-md" style="text-align: left;">
                    <label for="to">Converted Value:</label>
                    <label for="to_drop"></label>
                    <div class="row">
                        <div class="col-md-5">
                            <input type="number" class="form-control m-b-md" disabled id="to"
                                   value="<?php echo isset($res) ? $res : ''; ?>" name="to" placeholder="Converted">
                        </div>
                        <div class="col-md-5">
                            <select class="form-control" id="to_drop" name="to_drop">
                                <option value=1>Centimeter</option>
                                <option value=2>Meter</option>
                                <option value=3>Kilometer</option>
                                <option value=4>Feet</option>
                                <option value=5>Inch</option>
                                <option value=6>Miles</option>
                                <option value=7>Yards</option>
                            </select>
                            <script>
                                document.getElementById("from_drop").value = <?php echo isset($from_drop) ? $from_drop : 1; ?>;
                                document.getElementById("to_drop").value = <?php echo isset($to_drop) ? $to_drop : 1; ?>;
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-outline-info m-b-md" value="Convert">
        </form>
        <!-- length conversion program ends -->

    </div>

@endsection
