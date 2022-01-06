<?php
session_start();
require('connection.php');

class Login{
    public function logon($usr,$psw){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM LoginTB WHERE userLogin = '$usr' AND passwLogin = md5('$psw')");
        $query->execute();

        $row = $query->rowCount();

        if($row == 1){
            $_SESSION['user'] = $usr;
            header("Location: logadoSucesso.php");
            exit();
        }else{
            $_SESSION['off'] = true;
            header("Location: index.php");
            exit();
        }
}
}

