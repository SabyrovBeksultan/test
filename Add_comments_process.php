<?php
	include('functions.php');
	$comment_text = $_POST['comments'];
	$date_mk= time();
	$id_topics = $_POST['id_topics'];
	print_r($_POST);
	$add_com = add_comments($comment_text, $date_mk, $id_topics);
?>