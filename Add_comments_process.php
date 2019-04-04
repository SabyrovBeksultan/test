<?php
	include('functions.php');
	$con = connection();
    $namee = $_POST['name'];
    $name = mysqli_real_escape_string($con, $namee);
	$comment_textt = $_POST['comments'];
	$comment_text = mysqli_real_escape_string($con, $comment_textt);
	$date_mkk = time();
	$date_mk = mysqli_real_escape_string($con, $date_mkk);
	//print_r($_POST);
	$add_com = add_human($name, $comment_text, $date_mk);
?>