<!DOCTYPE html>
<html>
    <head>	
    <meta charset="utf-8">
	<title>Форма регистрации</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js">
	</script>
    </head>
    <body >
    <form method="GET">
<div>
	<label>Имя: </label>
	<input type="text" name="name" required value="<?php if (isset($_GET['name']))
	    echo $_GET['name'];?>">
	<br>
	<label>Фамилия: </label>
	<input type="text" name="fam" required value="<?php if (isset($_GET['fam']))
	    echo $_GET['fam']; ?>">
	<br>
	<label>E-mail: </label>
	<input type="email" name="mail" required autocomplete="" placeholder="example@mail.com"value="<?php if (isset($_GET['mail']))
	    echo $_GET['mail']; ?>">
	<br>
	<label>Возраст: </label>
	<input type="text" name="age" required value="<?php if (isset($_GET['age']))
	    echo $_GET['age']; ?>">
	<br>
	<label>Номер телефона: </label>
	<input type="tel" name="nomer" pattern="\+7\-[0-9]{3}\-[0-9]{3}\-[0-9]{2}\-[0-9]{2}"placeholder="+7 (xxx)xxx-xx-xx">
	<label>Пол: </label> <br>
	<input type="radio" name="pol" value = "1" checked> Муж.<br>
	<input type="radio" name="pol" value="2"> Жен. <br>
	<label>Введите пароль: </label><input type="password" name="password" required>
	<label>Подтведите пароль: </label><input type="password" name="password2" required> <br>
	<label>Отзыв: </label> <textarea name="mes"></textarea>
	<br> <br>
	<input type="submit" onclick="go()">
	<br><br>
    </div>
</form>
 <?php
     
          if (isset($_GET['name']) && isset($_GET['fam']) && isset($_GET['password']) )
        {
        $name=strip_tags(trim($_GET['name']));
        $fam=strip_tags(trim($_GET['fam']));
        $mail=strip_tags(trim($_GET['mail']));
        $nomer=strip_tags(trim($_GET['nomer']));
        $age=strip_tags(trim($_GET['age']));
        $mes=strip_tags(trim($_GET['mes']));
        $password=$_GET['password'];
        echo 'Имя: '.$name.'<br>Фамилия: '.$fam.'<br>Возраст: '.$age.'<br>Пол: ';
        	if ($_GET['pol']==1)
            {echo 'Муж';}
            else {echo'Жен';}
            echo '<br>E-mail: '.$mail.'<br>Номер: '.$nomer.'<br>Пароль: '.$password."<br>Отзыв: ".$mes;
        }
        ?>
    </body>
</html>