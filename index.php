<!DOCTYPE html>
<?php 
session_start();
if(isset($_SESSION['user'])){
    header("Location: logadoSucesso.php");
}
?>
<html lang="pt">
<head>
    <link href="css/css.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Login PHP</title>
</head>
<body>
    <div class="form">
    <form action="login.php" method="POST">
    <h1>Login</h1>
        <?php if(isset($_SESSION['off'])): ?>
        <h3>Incorrect username or password.</h3>
        <?php 
        unset($_SESSION['off']);  
        endif;
        ?>
        <input type="text" name="user" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password">
        <br><br>
        <input type="submit" value="Login" id="button">
    </div>
    </form>
</body>
</html>