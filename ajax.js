$(document).ready(function(){

	$('#select').on('change', function(){
        var select= $(this).val();
        localStorage.setItem("select", select);
        $('#pustoi').load("topic_table.php?select=" + select + "");
    });

    $(document).on('click','.num', function(){
        var nums = $(this).data("numbers");
        var kol = $(this).data("kolnum");
        var id_section = $(this).data('id_section');
        var user_id = $(this).data('id_user');
        
        localStorage.setItem("page", nums);
        var select = localStorage.getItem("select");
        if (select) {
        	//$('#pustoi').load("topic_table.php?page=" + nums + "&select=" + select);
            $('#pustoi').load("topic_table.php?page=" + nums + "&select=" + select + "&id_section="+ id_section + "&user_id=" + user_id + "");
        }
        else{
        	//$('#pustoi').load("topic_table.php?page=" + nums + "&select=" + kol);
            $('#pustoi').load("topic_table.php?page=" + nums + "&select=" + kol + "&id_section="+ id_section + "&user_id=" + user_id + "");
        }
        // var select = $('#silect').val();       
    });
    $(document).on('click', '.next', function(){
              var kol = $(this).data("kolnext");
              var next= $(this).data('next');
              var id_section = $(this).data('id_section');
              var user_id = $(this).data('id_user');
              //alert(kol);

              localStorage.setItem("page", next);       
              var page = parseInt(localStorage.getItem("page"));
              //alert(next);
              $.ajax({
                  method: "GET",
                  url: "topics.php",
                  data: {page:next, id_section:id_section, user_id:user_id},
              }).done(function(){             
                      /*$('#pustoi').load("topic_table.php?page=" + next + "&id_section=" + $id_section + "&user_id="+ $user_id +"&select=" + kol);*/
                       $('#pustoi').load("topic_table.php?page=" + next + "&select=" + kol + "&id_section="+ id_section + "&user_id=" + user_id + ""); 
              });
          });
    $(document).on('click', '.prev', function(){
             var kol = $(this).data("kolprev");
             var prev = $(this).data("prev");
             var id_section = $(this).data('id_section');
             var user_id = $(this).data('id_user');

             localStorage.setItem("page", prev);
             var page = parseInt(localStorage.getItem("page"));
             //alert(prev);
            $.ajax({
              method:"GET",
              url:"topics.php",
              data:{page: prev, id_section:id_section, user_id:user_id},
            }).done(function(){
                  //$('#pustoi').load("topic_table.php?page=" + prev + "&select=" + kol);
                  $('#pustoi').load("topic_table.php?page=" + prev + "&select=" + kol + "&id_section="+ id_section + "&user_id=" + user_id + "");
                });
    });

    $(document).on('click', '.last', function(){
        var kol = $(this).data("kollast");
        var num = $(this).data("last")-1;
        var last = num;


        var id_section = $(this).data('id_section');
        var user_id = $(this).data('id_user');
        //alert(user_id); 

        localStorage.setItem("page", last);
        var page = parseInt(localStorage.getItem("page"));
         //alert(last);
        $.ajax({
          method:"GET",
          url:"topics.php",
          data:{page:last, id_section:id_section, user_id:user_id},
            }).done(function(){
              //$('#pustoi').load("topic_table.php?page=" + last + "&select=" + kol);
              $('#pustoi').load("topic_table.php?page=" + last + "&select=" + kol + "&id_section="+ id_section + "&user_id=" + user_id + "");
            });
        });

    $(document).on('click', '.first', function(){
        var first = $(this).data("first");
        var kol = $(this).data("kolfirst");
        var id_section = $(this).data('id_section');
        var user_id = $(this).data('id_user');
        alert(id_section);

        localStorage.setItem("page", first);
        var page = parseInt(localStorage.getItem("page"));
        //var perv = per/per-1;
        // alert(perv);
        $.ajax({
          method:"GET",
          url:"topics.php",
           // data:{stranica:pols},
        }).done(function(){
            //$('#pustoi').load("topic_table.php?page=" + first + "&select=" + kol);
            $('#pustoi').load("topic_table.php?page=" + first + "&select=" + kol + "&id_section="+ id_section + "&user_id=" + user_id + "");
        });
    });
    //end topics
    //
    //comments
    $('#select_com').on('change', function(){
        var select= $(this).val();
        localStorage.setItem("select", select);
        $('#pustoi').load("comments_table.php?select=" + select + "");
    });
    $(document).on('click','.num_com', function(){
        var nums = $(this).data("numbers");
        var kol = $(this).data("kolnum");
        
        localStorage.setItem("page", nums);
        var select = localStorage.getItem("select");
        if (select) {
            $('#pustoi').load("comments_table.php?page=" + nums + "&select=" + select);
        }
        else{
            $('#pustoi').load("comments_table.php?page=" + nums + "&select=" + kol);
        }
        // var select = $('#silect').val();
       
    });
    $(document).on('click', '.next_com', function(){
        var kol = $(this).data("kolnext");
        var next= $(this).data('next');
        var id_topics = $(this).data('id_topics_next');
        alert(id_topics);
        localStorage.setItem("page", next);       
        var page = parseInt(localStorage.getItem("page"));
        //alert(next);
        $.ajax({
            method: "GET",
            url: "index.php",
            data: {page: next},
        }).done(function(){             
                $('#pustoi').load("comments_table.php?page=" + next + "&id_topics="+ id_topics +"&select=" + kol);          
            
        });
    });
    $(document).on('click', '.prev_com', function(){
             var kol = $(this).data("kolprev");
             var prev = $(this).data("prev");

             localStorage.setItem("page", prev);
             var page = parseInt(localStorage.getItem("page"));
             //alert(prev);
            $.ajax({
              method:"GET",
              url:"index.php",
              data:{page: prev},
            }).done(function(){
                  $('#pustoi').load("comments_table.php?page=" + prev + "&select=" + kol);
                });
    });
    $(document).on('click', '.last_com', function(){
        var kol = $(this).data("kollast");
        var num = $(this).data("last")-1;
        var last = num;

        localStorage.setItem("page", last);
        var page = parseInt(localStorage.getItem("page"));
         //alert(last);
        $.ajax({
          method:"GET",
          url:"index.php",
          data:{page:last},
            }).done(function(){
              $('#pustoi').load("comments_table.php?page=" + last + "&select=" + kol);
            });
        });
    $(document).on('click', '.first_com', function(){
        var first = $(this).data("first");
        var kol = $(this).data("kolfirst");

        localStorage.setItem("page", first);
        var page = parseInt(localStorage.getItem("page"));
        //var perv = per/per-1;
        // alert(perv);
        $.ajax({
          method:"GET",
          url:"index.php",
           // data:{stranica:pols},
        }).done(function(){
            $('#pustoi').load("comments_table.php?page=" + first + "&select=" + kol);
        });
    });
    //end comments
});