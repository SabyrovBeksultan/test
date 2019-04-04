<?php
//Connection start
function connection(){
	$connection= mysqli_connect("localhost", "root", "", "example");
	return $connection;
}
//end

//comments
function select_people($orderby='', $limit=''){
	header('Content-Type: text/html; charset=utf-8');
	$connection= connection();
	$connection->set_charset("utf8");
	$orderby = mysqli_real_escape_string($connection, $orderby);
	$limit = mysqli_real_escape_string($connection, $limit);
	$result= mysqli_query($connection, "SELECT * FROM people $orderby". $limit);
//	echo "SELECT * FROM topic_comments $orderby";
	$dannye = array();
	if ($result) {
		while($row = mysqli_fetch_assoc($result)){
			$dannye[]=$row;
		}
		return $dannye;
	}
}
function add_human($name, $comment_text, $date_mk){
	header('Content-Type: text/html; charset=utf-8');
	$connection= connection();
	$connection->set_charset("utf8");
	$name = mysqli_real_escape_string($connection, $name);
    $comment_text = mysqli_real_escape_string($connection, $comment_text);
    $date_mk = mysqli_real_escape_string($connection, $date_mk);
	$result = mysqli_query($connection, "INSERT INTO people (name_human, comment_text, date_mk) values('$name','$comment_text', '$date_mk')");
}
//