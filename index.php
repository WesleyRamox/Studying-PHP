<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NOWAY - Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/bootstrap.css">
</head>
 
<body>

    <h1>LOGIN</h1>
    <div class="container">
        <form action="./functions/login.php" method="POST" class="mt-4">
            <div class="form-group">
        
                <label for="usuario">Username</label>
                    <input type="text" name="usuario" id="usuario" class="form-control">

                <label for="senha">Password</label>
                    <input type="password" name="senha" id="senha" class="form-control">

                        <?php 
                            if(isset($_SESSION['msg_error'])) { 
                                echo "<div class='alert alert-danger mt-2' role='alert'>". $_SESSION['msg_error'] ."</div>"; 

                                session_destroy();
                            }
                        ?>
                
                
                <button type="submit" name="send" class="btn btn-primary mt-3">Sign-in</button>
                <a href="./signup" class="btn btn-success mt-3">Sign-up</a>
            </div>
        </form>
    </div>

    <script src="./public/js/bootstrap.js"></script>
</body>
</html>