<?php
/**
 * Created by PhpStorm.
 * User: jmpg
 * Date: 22/05/18
 * Time: 23:14
 */
session_start();
if (!isset($_SESSION['access_token'])){
    header('Location: index.php');
    exit();
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 ">
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
            <div class="col-md-8 col-md-offset-8">
                <img src="<?php echo $_SESSION['userData']['picture']['url'] ?>"><br><br>
            </div>
            <div class="col-md-8 col-md-offset-8">
                <table>
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td><?php echo $_SESSION['userData']['id'] ?> </td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td><?php echo $_SESSION['userData']['first_name'] ?> </td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><?php echo $_SESSION['userData']['last_name'] ?> </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $_SESSION['userData']['email'] ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
