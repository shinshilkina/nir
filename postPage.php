<link rel='stylesheet' href='style.css' />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">



<?php
require_once 'connection.php'; // подключаем скрипт
$link = mysqli_connect($host, $user, $password, $database) // подключаемся к серверу
    or die("Ошибка " . mysqli_error($link));?>

<?php $query="SELECT * FROM tableofposts WHERE picture like '%small%' or picture is null";
$result = mysqli_query($link, $query);
while ($Mypost = mysqli_fetch_array($result)){
?>
<div class="container">
  <div class="row">
    <div class="col-md-auto">
<form method="post" action="" class="formPost">
	
<img src="<?php echo $Mypost ['picture'];?>" name="imageOfPost" /> <p> 
<?php echo $Mypost ['name'];?><p>
<?php echo $Mypost ['aboutb'];?> 
</form> </div>
<?
}
?>

<div class="col-md-auto">
<form method="post" action="" class="formPost">
	
<img src="files/small_photo1.jpg" name="imageOfPost" /> <p>
<a>А тут будет название поста</a><p>
	<a>А тут будет краткое описание поста и еще добавлю несколько строк</a>
</form> </div></div></div>








