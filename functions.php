<?php
//Connection start
function connection(){
	$connection= mysqli_connect("localhost", "root", "", "database");
	return $connection;
}
//end
//
//topics
function select_topics($orderby='', $limit=''){
	header('Content-Type: text/html; charset=utf-8');
	$connection= connection();
	$connection->set_charset("utf8");  
	$result= mysqli_query($connection, "SELECT * FROM topics $orderby". $limit);	
	$dannye = array();
	if ($result) {
		while($row = mysqli_fetch_assoc($result)){
			$dannye[]=$row;
		}
		return $dannye;
	}
}

function edit_topics_process($title='', $topic_text='', $date_mk='', $user_id='', $id=''){
	header('Content-Type: text/html; charset=utf-8');
	$connection= connection();
	$connection->set_charset("utf8");
	$result= mysqli_query($connection,"UPDATE topics SET title='$title', topic_text='$topic_text', date_mk='$date_mk', user_id='$user_id' WHERE id=$id");
}
//end topics
//
//comments
function select_comments($orderby='', $limit=''){
	header('Content-Type: text/html; charset=utf-8');
	$connection= connection();
	$connection->set_charset("utf8");
	$result= mysqli_query($connection, "SELECT * FROM topic_comments $orderby". $limit);
//	echo "SELECT * FROM topic_comments $orderby";
	$dannye = array();
	if ($result) {
		while($row = mysqli_fetch_assoc($result)){
			$dannye[]=$row;
		}
		return $dannye;
	}
}
function add_comments($comment_text, $date_mk, $topic_id){
	header('Content-Type: text/html; charset=utf-8');
	$connection= connection();
	$connection->set_charset("utf8");
	$result = mysqli_query($connection, "INSERT INTO topic_comments (comment_text, date_mk, topic_id) values('$comment_text', '$date_mk', $topic_id)");
}
//