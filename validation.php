<?php
session_start();

class Validacao{
    public static function validacao(){
        if(empty($_POST['user']) || empty($_POST['password'])){        
            $_SESSION['off'] = true;
            header("Location: index.php");
            exit();
        }else{
            require('login.class.php');
        }      
}
}
class Sucess{
    public static function sucesso(){ 
            if(!$_SESSION['user']){
                header("Location: index.php");
                exit();
            }
}
    public static function logout(){
    if(isset($_GET['logout'])){
        session_unset();
        session_destroy();
        header("Location: index.php");
 }
}
}