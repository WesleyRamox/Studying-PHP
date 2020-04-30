<?php
    include('../functions/verifica_login.php');

?>

<!doctype html>
<html>
  <head>
    <title>NOWAY - Panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../public/css/bootstrap.css">
  </head>
  <body id="geral">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

    <div class="container">
        <?php 
            if(isset($_SESSION['msg_login'])) { 
                echo "<div class='alert alert-success mt-4' role='alert'>". $_SESSION['msg_login'] ."</div>"; 
            unset($_SESSION['msg_login']);
            }
        ?>

        <p><a href="../functions/logout.php" class="btn btn-danger mt-2">Logout</a></p>
    </div>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="../public/js/bootstrap.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
  </body>
</html>