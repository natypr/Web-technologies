<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Regular</title>
    <meta name="author" content="Nataliya Statkevich">

</head>          
<body>

	<form method="post">
	<h3>Введите почту</h3>
	<a>Проверка почты вида: name.surname@subserver.server.dom</a>
	<br><br>
	Ваша почта: <input type="text" name="mail" required><br>
	<br><input type="submit">
	<br><br>
	</form>

</body>
</html>

<?php 

    if(isset($_POST['mail'])){
		$mail = $_POST['mail'];		

		echo checkMail($mail);

    } else {
        echo '<br>Вы ещё ничего не ввели!';
    }  


function checkMail($mail) {
	
	if (preg_match("#^[A-Za-z]+(.[A-Za-z]+)*\@([A-Za-z]+.)*[A-Za-z]+.[A-Za-z]+$#", $_POST['mail'])){
		return "Верно, это может быть почтой!!!";      

	} else {
		return "Нет, введите ещё раз.";
	} 
}