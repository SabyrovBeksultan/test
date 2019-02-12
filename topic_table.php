<?php
	include('functions.php');


    $sections = "ORDER BY id DESC";

    $select_topics= select_topics($sections);
    $i=1;
    
    //echo $user_id;
?>
<table class="w3-table-all w3-card-4" border="1" width="400">
    <thead>
      <tr>
        <th>
            No
        </th>           
        <th>
            Title
        </th>
        <th>
            Date of registration
        </th>
    </tr>                           
  </thead>
<?php foreach($select_topics as $stroka): ?>
    <tr>
        <td>
            <?=$i++?>
        </td>
        <td>
            <a href="comments.php?id_topics=<?php echo $stroka['id'];?>"><h4><?php echo $stroka['title']; ?></h4></a>
            <p><?php echo $stroka['topic_text']?></p>        
        <td>
            <p><?php echo $stroka['date_mk']?></p>
        </td>
    </tr>
<?php endforeach; ?>
</table>



