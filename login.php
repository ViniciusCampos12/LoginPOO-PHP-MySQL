<?php
 require('validation.php');
 Validacao::validacao();

 $usr = $_POST['user'];
 $psw = $_POST['password'];
 $l = new Login();
 $l->logon($usr,$psw);