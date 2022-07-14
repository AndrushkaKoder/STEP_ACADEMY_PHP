<?php
print_r($_POST);

if(!isset($_POST[$userName])){
    $userName = htmlspecialchars($_POST['login']);
    $userPassword = $_POST['password'];
    $send = $_POST['send'];

};



?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>получение данных из файла txt</title>
</head>
<body>

<?php if(empty($_POST)){ ?>
    <form action="" method="POST">
    <label for="login">введите логин</label>
    <input type="text" name = "login" placeholder = "логин">
    <p></p>
    <label for="password">введите пароль</label>
    <input type="password" name = "password" placeholder = "пароль">
    <p></p>
    <input type="submit">
    <p></p>
    <input type="checkbox" name="send" value="vSend">
</form>
    
   <?php } else{
    echo "hello " .$userName;
    print "<br>";
    echo "your pass is ".$userPassword;
   };?>



<?php


?>





    
</body>
</html>


