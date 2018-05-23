<?php

include_once("CardController.php");
$getdata = new CardController();

if (isset($_GET['submit'])) {

    $name = $_GET['name'];
    $email = $_GET['email'];
    $web = $_GET['web'];

    $getdata->show_info($name, $email, $web);

}
?>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Business Card Generator">
    <meta name="author" content="Kisalka Rajapaksha">
    <link rel="icon" href="img/B Letter.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>
        Business Card Generator
    </title>

    <style>

        .about {
            font-family: Times New Roman;
            line-height: 180%;
            font-size: 135%;
            text-align: center;
            color: #353c47;
        }

        .formsize {
            width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

    </style>

    <?php
    include("Navbar.php")
    ?>

</head>

<body>

<div class="container"> <!-- Start Of The Container Class -->

    <div class="row text-center"> <!-- Start Of The Row Class -->

        <div class="col-md-12 col-sm-12 hero-feature"> <!-- Start Of The Col Class -->

            <p class="about"> <!-- Start Of The P About Class -->

            <h1>Provide Your Information</h1>

            </p> <!-- End Of The P About Class --> <br>

            <form action="" method="" class="formsize" id="signupForm">
                Your Name : <input type="text" name="name" id="name" class="form-control"> <br><br>
                Your Email : <input type="email" name="email" id="email" class="form-control"> <br><br>
                Your Web Address : <input type="text" name="web" id="web" class="form-control"> <br><br>
                <label>Upload Photo : </label>
                <input type="file" class="form-control-file" name="file_img" aria-describedby="fileHelp"> <br><br>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary"> <br><br>
            </form>

        </div> <!-- End Of The Col Class -->

    </div> <!-- End Of The Row Class -->

</div> <!-- End Of The Container Class -->

<script type="text/javascript">
    $(document).ready(function () {
        $.getScript("validation.js", function () {
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>

</body>

<!-- Footer -->
<?php
include("Footer.php")
?>
<!-- End Of The Footer -->

</html>