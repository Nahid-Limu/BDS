<!DOCTYPE html>
<?php include 'db.php'; ?>
<?php include 'function.php'; ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Save One's Life</title>



        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="all"/>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css" />


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
            <div class="text-danger text-center">
                <p>Blood donation is a major concern to the society as donated blood is lifesaving for individuals who need it. Blood is scarce. There is a shortage to active blood donors to meet the need of increased blood demand. Blood donation as a therapeutic exercise. Globally, approximately 80 million units of blood are donated each year. One of the biggest challenges to blood safety particularly is accessing safe and adequate quantities of blood and blood products. Safe supply of blood and blood components is essential, to enable a wide range of critical care procedures to be carried out in hospitals. Good knowledge about blood donation practices is not transforming in donating blood. Interactive awareness on blood donation should be organized to create awareness and opportunities for blood donation.</p>
            </div>

            <div class="search">
                <form method="post" action="" enctype="multipart/form-data">
                    <input type="text" name="user_query" class="form-control input-lg center-block" maxlength="64" placeholder="O+ Uttara" />
                    <button type="submit" name="search" class="btn btn-primary btn-sm center-block">Search</button>
                    <div id="list">

                    </div>
                </form>

            </div>

            <table class="table table-responsive table-hover table-bordered center-block">


                <?php
                show::show_data();
                ?>

            </table>


            <footer class="nav navbar-default">
                <img id="flogo" class="img-responsive center-block" src="image/footer.png">

            </footer>

        </div>


    </body>



</html>
<script>
    $(document).ready(function () {
        $('#list').keyup(function () {
            var query = $(this).val();
        });
    });
</script>
