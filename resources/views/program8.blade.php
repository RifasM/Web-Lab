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

    </div>

@endsection
