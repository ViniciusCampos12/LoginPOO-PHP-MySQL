<link href="css/css.css" rel="stylesheet" type="text/css">
<?php
require('validation.php');
Sucess::sucesso();
Sucess::logout();
?>

<div class="hello">Hello, <?php echo $_SESSION['user']; ?></div>
<br>
<div style='text-align:center'><a href='?logout'>Sair</a></div>