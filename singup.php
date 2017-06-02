<!DOCTYPE html>
<?php include 'db.php'; ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Save One's Life</title>



        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="all"/>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>


        <script>
            $(document).ready(function () {
                $("#btn").click(function () {

                    var b_group = $("#b_group").val();
                    var name = $("#name").val();
                    var dob = $("#dob").val();
                    var phone = $("#phone").val();
                    var address = $("#address").val();
                    var key = $("#key").val();

                    $.post("",{b_group:b_group,name:name,dob:dob,phone:phone,address:address,key:key}, function (data) {
                        $()
                    });
                });
            });
        </script>


    </head>
    <header>
        <div id="heeder" class="navbar-default">

            <img id="logo" class="img-responsive center-block" src="image/logo.png">

        </div>
    </header>

    <body class="container" >

        <nav class="nav navbar-inverse">
            <ul>
                <li>
                    <a href="singup.php">SingUp</a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
            </ul>

        </nav>
        <div id="main-contain" class="navbar-default">

            <div  class="navbar-default">

                <form action="" method="POST" enctype="multipart/form-data">
                    <table id="singuptbl" class="table-responsive ">

                        <tr align="center">
                            <th align="center"><b><h2><span style="color: red; position: relative; left: 30%;">Sing Up For Save Life</span></h2></b></th>
                        </tr>

                        <tr >
                            <td ><b>Blood Group:</b></td>
                            <td><input type="text" name="b_group" id="b_group" class="form-control-static" required="1" placeholder="EX: O+ "></td>
                        </tr>
                        <tr >
                            <td ><b>Name:</b></td>
                            <td><input type="text" name="name" id="name" class="form-control-static" required="1" placeholder="Your Name "></td>
                        </tr>
                        <tr >
                            <td ><b>Date of birth:</b></td>
                            <td><input type="date" name="dob" id="dob" class="form-control-static" required="1" placeholder="1995-04-28"></td>
                        </tr>
                        <tr >
                            <td ><b>Phone:</b></td>
                            <td><input type="number" name="phone" id="phone" class="form-control-static" required="1" placeholder="01719009988"></td>
                        </tr>
                        <tr >
                            <td ><b>Address:</b></td>
                            <td><input type="text" name="address" id="address" class="form-control-saddresstatic" required="1" placeholder="Uttara, Dhaka"></td>
                        </tr>

                        <tr>
                            <td><b>Keywords:</b></td>
                            <td><input type="text" name="key" id="key" class="form-control-static"  required="1" placeholder="O+ uttara"></td>

                        </tr>
                        <tr style="position: relative; left: 61%;">

                            <td ><input id="btn" type="submit" name="submit" value="Save Life"/></td>

                        </tr>
                    </table>
                </form>

            </div>

            <footer class="nav navbar-default">
                <img id="flogo" class="img-responsive center-block" src="image/d3.png">

            </footer>
        </div>


    </body>

</html>

<?php

class data {

    public static function store_data() {

        global $con;

        if (isset($_POST['submit'])) {

            $bg = $_POST['b_group'];
            $name = $_POST['name'];
            $bod = $_POST['dob'];
            $pgn = $_POST['phone'];
            $address = $_POST['address'];
            $key = $_POST['key'];

            $query = "INSERT INTO singup(bg, name, dob, phone, address, keyword) VALUES ('$bg','$name','$bod','$pgn','$address','$key')";

            $insert = mysqli_query($con, $query);

            if (isset($insert)) {

                echo "<script>alert('Thank You For Being With Us')</script>";
                
            }
        }
    }

}

data::store_data();
?>