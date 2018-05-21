<?php

include_once("CardController.php");
$getdata = new CardController(); 

if(isset($_GET['submit'])){

$name = $_GET['name'];
$email = $_GET['email'];
$web = $_GET['web'];

$getdata->show_info($name,$email,$web);

}
?>

<html>

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/WisdomIcon.jpg">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<title>

</title>

<style>

.about
{
	font-family: Times New Roman;
	line-height: 180%;
	font-size:135%;
	text-align: center;
	color:#353c47;
}

.formsize
{
	width:500px;
	margin-left: auto;
    margin-right: auto;
}

</style>

<script type="text/javascript" src="js\jquery-3.2.1.js"></script>

</head>

<body>

<div class="container"> <!-- Start Of The Container Class -->

<div class="row text-center"> <!-- Start Of The Row Class -->

<div class="col-md-12 col-sm-12 hero-feature"> <!-- Start Of The Col Class -->
                
<p class="about"> <!-- Start Of The P About Class -->

<h1>Business Card Generator</h1>

</p> <!-- End Of The P About Class --> <br>

<form action="" method="" class="formsize">
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

<!-- Footer -->
<!-- End Of The Footer -->

</body>
</html>