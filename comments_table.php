<?php
	include('functions.php');

    $id_topics = $_GET['id_topics'];
    //echo $id_topics;
    $orderby_app = "WHERE topic_id=$id_topics ORDER BY id DESC";
    //echo $orderby_app;
    $select_comments= select_comments($orderby_app);

//    print_r($select_comments);
?>
    
<?php foreach($select_comments as $stroka): 
      $date_mk = $stroka['date_mk'];
      $date_stroka = date("Y-m-d H:i:s",$date_mk);
      ?>
    <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">Comments</div>
          <div class="panel-body">
                <h4><?php echo $stroka['comment_text']?></h4>
                <p><?php echo $date_stroka; ?></p>
          </div>
        </div>
    </div>       
<?php endforeach; ?>



