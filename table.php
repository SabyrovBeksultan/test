<?php
	include('functions.php');

$uni_all= count(select_people());

$page = isset($_GET['page']) ? $_GET['page'] : 0;
$kol_zapisei = isset($_GET['select']) ? $_GET['select'] : 2;

$kol_stranic= ceil(count(select_people())/$kol_zapisei);
$kolminus= $kol_stranic-1;

$first= $page==0;
$last= $page==$kolminus;

$offset = ($page == 0) ? 0 : $kol_zapisei * $page;

    //echo $orderby_app;
    $select_comments= select_people("ORDER BY id DESC LIMIT $kol_zapisei OFFSET $offset");
    //print_r($select_comments);
?>
    
<?php foreach($select_comments as $stroka): 
      $date_mk = $stroka['date_mk'];
      $date_stroka = date("Y-m-d", $date_mk);
      ?>
    <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">Human</div>
          <div class="panel-body">
              <h3><?php echo $stroka['name_human']?></h3>
                <h5><?php echo $stroka['comment_text']?></h5>
                <p><?php echo $date_stroka; ?></p>
          </div>
        </div>
    </div>       
<?php endforeach; ?>

<?php
$prev= max(0, $page-1);
$next= min($kol_stranic, $page+1);

if(!$first){
    // $prev= $stranica-2;
    //$url = "univer.php?stranica=($stranica-1)";
    echo "<a href='javascript:void(0)' data-kolfirst='$kol_zapisei' data-first=0 class='w3-button first'>First</a>";
    echo "<a href='javascript:void(0)' data-kolprev='$kol_zapisei' data-prev='$prev' class='w3-button prev'>Previous</a>";
}

$get_str = $_GET['page'];
$start= $get_str-1;
$end= $get_str+2;
if ($end> $kol_stranic) {
    $start= $get_str-2;
    $end= $kol_stranic;
}
if ($start<0) {
    $start=0;
    $end= $get_str+3;
}
for($i=$start; $i<$end; $i++){
    $nomer= $i+1;

    echo "<a href='javascript:void(0)' data-kolnum='$kol_zapisei' data-numbers='$i' class='w3-btn w3-white num'>$nomer</a> ";
}

if(!$last){
    //$next= $stranica+2;
    echo "<a href='javascript:void(0)' data-kolnext='$kol_zapisei' data-next='$next' class='w3-button next'>Next</a>";
    echo "<a href='javascript:void(0)' data-kollast='$kol_zapisei' data-last='$kol_stranic' class='w3-button last'>Last</a>";
}
?>



