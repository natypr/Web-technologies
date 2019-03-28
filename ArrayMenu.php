<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Менюшка и массив</title>
    <meta name="author" content="Nataliya Statkevich">

    <link rel="stylesheet" href="menu.css">
</head>          
<body>
	<!-- --------------------Menu--------------------------- -->
	<ul class="menu">
	  <li <?php if($_GET['id'] == 1) echo 'class="current"';?> ><a href="ArrayMenu.php?id=1">Главная</a></li>
	  <li <?php if($_GET['id'] == 2) echo 'class="current"';?> ><a href="ArrayMenu.php?id=2">О нас</a></li>
	  <li <?php if($_GET['id'] == 3) echo 'class="current"';?> ><a href="ArrayMenu.php?id=3">Услуги</a></li>
	  <li <?php if($_GET['id'] == 4) echo 'class="current"';?> ><a href="ArrayMenu.php?id=4">Партнеры</a></li>
	  <li <?php if($_GET['id'] == 5) echo 'class="current"';?> ><a href="ArrayMenu.php?id=5">Контакты</a></li>
	</ul>

	<!-- --------------------Form--------------------------- -->
	<form method="post">
	<h3>Введите 2 массива через запятые</h3>
	Массив 1: <input type="text" name="arr1" required><br>
	Массив 2: <input type="text" name="arr2" required><br>
	<br><input type="submit">
	</form>

</body>
</html>


<?php  

   if(isset($_POST['arr1']) and isset($_POST['arr2'])){
       
       if ( (preg_match("#^[0-9,]+$#",$_POST['arr1'])) and (preg_match("#^[0-9,]+$#",$_POST['arr2'])) ) {
			
	        $arr1 = str_replace(" ", "", $_POST['arr1']);
	        $arr2 = str_replace(" ", "", $_POST['arr2']);
	        $arr1 = explode(",", $arr1);
	        $arr2 = explode(",", $arr2);
	        
	        echo '<br>';
	        foreach($arr2 as $element)
	            $arr1[] = $element;

	        print_r($arr1);    
	        echo '<br>';
	        foreach($arr1 as $el)
	            if((intval($el) % 2 == 0))
	                echo "$el ";        

		} else {
			   echo "Есть недопустимые символы. Вводите цифры через запятые!";
			}

    } else {
        echo '<br>Некоторые поля пусты.';
    }    
	
?> 