<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase">Example</div>
        </div>
      </div>
    </header>

   
    
      <div class="container">
        <div class="row">

          <div class="col-lg-12 text-center">         
            <div class="panel-group">
              <div class="panel panel-primary">
                <div class="panel-heading">Human and text message</div>
                <div class="panel-body">
                  <form id="add_form" class="form-horizontal" action="javascript:void(0)">
                    <div class="form-group">                      
                      <div class="col-sm-10">
                          <input class="form-control name" id="add_human" type="text" name="name" placeholder="Name Surname"><br>
                          <textarea class="form-control comm_textarea" placeholder="Message" name="comments"></textarea>
                      </div>
                    </div>                    
                    <div class="form-group">        
                      <div class="col-sm-12">
                        <button id="add" type="submit" class="btn btn-default">Add</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div id="pustoi"></div>
              <select class="form-control" id="select" name="sorting">
                  <option value="0">Pagination</option>
                  <?php
                  $arr = array(2, 5, 10, 20, 30);
                  foreach ($arr as $value) {
                      echo "<option value='$value'>$value</option>";
                  }
                  ?>
              </select>


          </div>
        </div>
      </div>
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">&copy; Website 2019</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <p>+79011897697</p>
              </li>
              <li class="list-inline-item">
                <p>bekasabyrov77@gmail.com</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

    <script src="ajax.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('#pustoi').load('table.php');
      });
    </script>
    <script>
      $(document).ready(function(){
          $(document).on('click', '#add', function(){
              var form_add= $("#add_form")[0];
              var vse_polya_add = new FormData(form_add);
                $.ajax({
                  method:"POST",
                  url:'Add_comments_process.php',
                  data: vse_polya_add,
                  contentType:false,
                  processData:false     
                  }).done(function(){
                  $('#pustoi').load('table.php');
                  document.querySelector('.name').value='';
                  document.querySelector('.comm_textarea').value='';
              });
          });
      });
    </script>

  </body>
</html>
