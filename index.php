<?php
/**
 * Created by PhpStorm.
 * User: jmpg
 * Date: 21/05/18
 * Time: 12:10
 */
include_once "config.php";
$redirectURL = "https://quinielacapitalfutbol.com/publiza/facelogin/fb-callback.php";
$permissions = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
echo $loginURL;

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0 ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log In</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background: #000000;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
                <img src="assets/img/logo1.gif" alt="" width="250px"><br><br>
                <form action="">
                    <input type="email" name="email" value="" placeholder="email" class="form-control"><br>
                    <input type="password" name="passoword" value="" placeholder="Password" class="form-control">
                    <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                    <button type="button" onclick="window.location ='<?php echo $loginURL?>'" class="btn btn-primary">Log In with Facebook</button>
                </form>
            </div>
        </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
