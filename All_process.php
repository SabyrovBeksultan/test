<?php
	include('functions.php');

	$title= $_POST['title'];
	$topic_text= $_POST['topic_text'];
	$date= $_POST['date'];	
	$user_id= $_POST['user_id'];
	$action= $_POST['action'];
		if($title!=""){	
			add_topics_process($title, $topic_text, $date, $user_id);	
			//header("Location: univer.php");			
		}
		// edit_topics
		$date_mk = $_POST['date'];
		$topic_id = $_POST['topic_id'];
			if($action=='edit_topics'){
				$edit_topics_process= edit_topics_process($title, $topic_text, $date_mk, $user_id, $topic_id);
				//header("Location: univer.php");
				//print_r($_POST);
				}
			// delete_topics
		$id_topics = $_GET['id_topics'];
		$delete_topics = $_GET['delete_topics'];
			if ($delete_topics = 'delete_topics') {
				delete_topics($id_topics);
			}

?>