<?php
include("koneksi.php");

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="css/login.css" rel="stylesheet">

</head>
<body">
    <!-- /container -->
    <div class="container">
        <form class="form-signin" action="prosesdaftar.php" method="post">
            <center>
            <h2 class="form-signin-heading"><span class="glyphicon glyphicon-th-large"></span> Signup Sunset Coffee </h2>
            </center>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" autocomplete="off" autofocus="on" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email" autocomplete="off" autofocus="on" required>
            </div>
            <div class="input-group" style="margin-top: 5px;">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="text" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
            </div>
      
            <br />
            <input type="submit" value="Daftar" class="btn btn-sm btn-primary" />&nbsp;
            <a href="login.php" class="btn btn-sm btn-danger">Batal </a>
            <p style='color: white'>Login? <a href="login.php">klik disini</a></p>
        </form>
    </div>

    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>