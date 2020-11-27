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

        </div>

        <!-- Student Record Program Starts -->
        <div class="row flex-center m-b-md">
            <div class="col-md-6 m-b-md">
                <h3 class="content">Original Student Records</h3>
                <?php

                /*
                 * SQL Queries
                 *
                 * create table student (usn varchar(10), name varchar(20), batch int(10));
                 * insert into student values("1CR17CS075", "Mohammed Rifas S", 2017);
                 * insert into student values("1CR17EC029", "Anushka Jemima", 2017);
                 * insert into student values("1CR17CS029", "Burla Sai Teja", 2017);
                 * insert into student values("1CR17CS094", "Rahul Majgi", 2015);
                 * insert into student values("1CR17ME090", "Rahul Dev R", 2016);

                 */

                $server = "localhost";
                $username = "manager";
                $password = "0xbeepboop";
                $port = 3306;
                $dbname = "weblab";

                // run sudo apt install php-mysqli
                $conn = mysqli_connect($server, $username, $password, $dbname, $port);

                if ($conn->connect_error)
                die("Connection failed: " . $conn->connect_error);
                else{

                // Display table from database

                $sql = "SELECT * FROM student";

                $a = [];
                $result = $conn->query($sql);

                ?>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">USN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Batch</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["usn"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["batch"] . "</td>";
                            echo "</tr>";
                            array_push($a, $row);
                        }
                    } else
                        echo "<tr><td colspan='3'>Empty Records</td></tr>";
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 m-b-md">
                <h3 class="content">Selection Sorted Student Records</h3>
                <?php

                $n = count($a);

                for ($i = 0; $i < ($n - 1); $i++) {
                    for ($j = $i + 1; $j < $n; $j++) {
                        if ($a[$i]["usn"] > $a[$j]["usn"]) {
                            $temp = $a[$i];
                            $a[$i] = $a[$j];
                            $a[$j] = $temp;
                        }
                    }
                }
                ?>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">USN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Batch</th>
                    </tr>
                    </thead>
                    <tbody id="counter-content">
                    <?php

                    for ($i = 0; $i < $n; $i++)
                        echo "<tr><td>" . $a[$i]["usn"] . "</td><td>" . $a[$i]["name"] . "</td><td>" . $a[$i]["batch"] . "</td></tr>";


                    ?>
                    </tbody>
                </table>
                <?php
                $conn->close();
                }
                ?>
            </div>
        </div>
        <!-- Student Record Program Ends -->

        <!-- Extra program starts -->
        <div class="row flex-center m-b-md">
            <div class="col-md-6 m-b-md">
                <h3 class="content">Extra Program - Student Record Search</h3>

                <form class="col-md-8 m-b-md" method="post">
                    @csrf
                    <div class="form-group m-b-md" style="text-align: left;">
                        <label for="name">Enter Student Name:</label>
                        <input type="text" id="name" name="name" class="form-control m-b-md" placeholder="Student Name"
                               required>
                    </div>
                    <input type="submit" class="btn btn-primary m-b-md" name="submit" value="Submit">
                </form>

                <?php
                if (isset($_POST["submit"])) {
                $name = $_POST["name"];

                $l_name = strtolower($name);
                $sql = "SELECT * FROM student WHERE LOWER(name) LIKE '%$l_name%'";


                $conn = mysqli_connect($server, $username, $password, $dbname, $port);

                if ($conn->connect_error)
                die("Connection failed: " . $conn->connect_error);
                else{
                $result = $conn->query($sql);
                ?>
                <h5 class="content m-b-md">
                    <?php
                    echo "Search results for $name";
                    ?>
                </h5>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">USN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Batch</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["usn"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["batch"] . "</td>";
                            echo "</tr>";
                        }
                    } else
                        echo "<tr><td colspan='3'>Empty Records</td></tr>";
                    ?>
                    </tbody>
                </table>
                <?php
                }
                }
                ?>
            </div>
        </div>
        <!-- Extra program ends -->

    </div>

@endsection
