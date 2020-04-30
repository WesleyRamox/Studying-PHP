<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NOWAY - Register</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
</head>
 
<body>

    <h1>REGISTER</h1>
    <div class="container">
        <form action="../functions/register.php" method="POST" class="mt-4">
            <div class="form-group">
        
                <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control">

                <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">

                        <?php 
                            if(isset($_SESSION['msg_error'])) { 
                                echo "<div class='alert alert-warning mt-2' role='alert'>". $_SESSION['msg_error'] ."</div>"; 

                                session_destroy();
                            }

                            if(isset($_SESSION['msg_register'])) { 
                                echo "<div class='alert alert-success mt-2' role='alert'>". $_SESSION['msg_register'] ."</div>"; 

                                session_destroy();
                            }
                        ?>
                    
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input mt-2" name="" id="" required>
                    <small class="form-text text-muted">Verify for security reasons</small>
                  </label>
                </div>
                
                <button type="submit" name="send" class="btn btn-primary mt-3">Sign-up</button>
                <a href="../" class="btn btn-success mt-3">Sign-in</a>
            </div>
        </form>
    </div>

    <script src="../public/js/bootstrap.js"></script>
</body>
</html>