$(document).ready(function(){

	$('#select').on('change', function(){
        var select= $(this).val();
        localStorage.setItem("select", select);
        $('#pustoi').load("table.php?select=" + select + "");
    });

    $(document).on('click','.num', function(){
        var nums = $(this).data("numbers");
        var kol = $(this).data("kolnum");
        
        localStorage.setItem("page", nums);
        var select = localStorage.getItem("select");
        if (select) {
            $('#pustoi').load("table.php?page=" + nums + "&select=" + select + "");
        }
        else{
            $('#pustoi').load("table.php?page=" + nums + "&select=" + kol + "");
        }
    });
    $(document).on('click', '.next', function(){
              var kol = $(this).data("kolnext");
              var next= $(this).data('next');

              localStorage.setItem("page", next);       
              var page = parseInt(localStorage.getItem("page"));
              //alert(next);
              $.ajax({
                  method: "GET",
                  url: "index.php",
                  data: {page:next},
              }).done(function(){
                       $('#pustoi').load("table.php?page=" + next + "&select=" + kol + "");
              });
          });
    $(document).on('click', '.prev', function(){
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
                  $('#pustoi').load("table.php?page=" + prev + "&select=" + kol + "");
                });
    });

    $(document).on('click', '.last', function(){
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
              $('#pustoi').load("table.php?page=" + last + "&select=" + kol + "");
            });
        });

    $(document).on('click', '.first', function(){
        var first = $(this).data("first");
        var kol = $(this).data("kolfirst");

        localStorage.setItem("page", first);
        var page = parseInt(localStorage.getItem("page"));

        $.ajax({
          method:"GET",
          url:"index.php",
           // data:{stranica:pols},
        }).done(function(){
            $('#pustoi').load("table.php?page=" + first + "&select=" + kol + "");
        });
    });
    //end topics
    //
    //comments
    $('#select_com').on('change', function(){
        var select= $(this).val();
        localStorage.setItem("select", select);
        $('#pustoi').load("table.php?select=" + select + "");
    });
});