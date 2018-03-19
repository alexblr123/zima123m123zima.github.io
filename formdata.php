<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
</head>

<body>
<?php 
if ($_POST['name'] and $_POST['pass']){ 
mail("alex.karotysh@gmail.com","Form","Имя: $_POST[name] \n Пароль: $_POST[pass]\n Любит ли пользователь экономить время: $_POST[rad] \n Что использует пользователь для экономии времени: \n $_POST[checkbox1] \n $_POST[checkbox2] \n $_POST[checkbox3] \n Сколько часов в день пользователь спит: $_POST[select] \n Наработки пользователя: $_POST[narabotki] ");
 echo "Отправлено";
}
	else {
     echo "Не веддены имя или пароль";
	}
?>
</body>
</html>