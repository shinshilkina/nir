
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />


<style>
.thumbs {width:190px; height:500px; position:relative; margin:20px 0 20px 10px; z-index:100; float:center;}
.thumbs input {position:absolute; left:-9999px;}
.thumbs label {display:block; width:90px; height:120px; float:left;
background-repeat: no-repeat;
}
.thumbs label.c1 {margin-right:10px;}
.thumbs label.r1,
.thumbs label.r2,
.thumbs label.r3,
.thumbs label.r4 {margin-bottom:10px;}
 
.thumbs label img {display:block; width:90px; height:120px; position:absolute; z-index:-1;
-webkit-transition:1s;
-moz-transition:1s;
-ms-transition:1s;
-o-transition:1s;
transition:1s;
}
 
.thumbs .c1 img {left:0;}
.thumbs .c2 img {left:100px;}
.thumbs .r1 img {top:0;}
.thumbs .r2 img {top:130px;}
.thumbs .r3 img {top:260px;}
.thumbs .r4 img {top:390px;}
.thumbs .r5 img {top:520px;}
 
.thumbs .t1 {background-image: url(zoomfly/p1t.jpg);}
.thumbs .t2 {background-image: url(zoomfly/p2t.jpg);}
.thumbs .t3 {background-image: url(zoomfly/p3t.jpg);}
.thumbs .t4 {background-image: url(zoomfly/p4t.jpg);}
.thumbs .t5 {background-image: url(zoomfly/p5t.jpg);}
.thumbs .t6 {background-image: url(zoomfly/p6t.jpg);}
.thumbs .t7 {background-image: url(zoomfly/p7t.jpg);}
.thumbs .t8 {background-image: url(zoomfly/p8t.jpg);}
.thumbs .t9 {background-image: url(zoomfly/p9t.jpg);}
.thumbs .t10 {background-image: url(zoomfly/p10t.jpg);}
 
#thumb1:checked ~ .t1 img,
#thumb2:checked ~ .t2 img,
#thumb3:checked ~ .t3 img,
#thumb4:checked ~ .t4 img,
#thumb5:checked ~ .t5 img,
#thumb6:checked ~ .t6 img,
#thumb7:checked ~ .t7 img,
#thumb8:checked ~ .t8 img,
#thumb9:checked ~ .t9 img,
#thumb10:checked ~ .t10 img {z-index:100;}
 
#thumb1:checked ~ .t1 img,
#thumb2:checked ~ .t2 img,
#thumb3:checked ~ .t3 img,
#thumb4:checked ~ .t4 img,
#thumb5:checked ~ .t5 img,
#thumb6:checked ~ .t6 img,
#thumb7:checked ~ .t7 img,
#thumb8:checked ~ .t8 img,
#thumb9:checked ~ .t9 img,
#thumb10:checked ~ .t10 img {left:270px; top:0; width:480px; height:400px;}
</style>
<?php 
require_once 'connection.php'; // подключаем скрипт
$link = mysqli_connect($host, $user, $password, $database) // подключаемся к серверу
    or die("Ошибка " . mysqli_error($link)); ?>

<?php //$query="SELECT * FROM tableofposts WHERE picture not like '%small%' or picture is null";
/*$result = mysqli_query($link, $query);
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
}*/
?>

<div class="block" align="left">
<div class="thumbs" align="center">
    <input type="radio" name="thumb" id="thumb1" checked="checked" />
    <input type="radio" name="thumb" id="thumb2" />
    <input type="radio" name="thumb" id="thumb3" />
    <input type="radio" name="thumb" id="thumb4" />
    <input type="radio" name="thumb" id="thumb5" />
    <input type="radio" name="thumb" id="thumb6" />
    <input type="radio" name="thumb" id="thumb7" />
    <input type="radio" name="thumb" id="thumb8" />
    <input type="radio" name="thumb" id="thumb9" />
    <input type="radio" name="thumb" id="thumb10" />
    <label for="thumb1" class="t1 c1 r1" onclick="void(0)"><img src="files/c-1.jpg" alt="" /></label>
    <label for="thumb2" class="t2 c2 r1" onclick="void(0)"><img src="files/c-2.jpg" alt="" /></label>
    <label for="thumb3" class="t3 c1 r2" onclick="void(0)"><img src="files/c-3.jpg" alt="" /></label>
    <label for="thumb4" class="t4 c2 r2" onclick="void(0)"><img src="files/image1.jpg" alt="" /></label>
    <label for="thumb5" class="t5 c1 r3" onclick="void(0)"><img src="files/image.jpg" alt="" /></label>
    <label for="thumb6" class="t6 c2 r3" onclick="void(0)"><img src="files/mys.jpg" alt="" /></label>
</div>
<div class="col-md-auto" align="center"> 
<form method="post" action="" class="formPost" >
<a>А тут будет название поста</a>
<p>
<a>А тут будет краткое описание поста и еще добавлю несколько строк</a>
</form> 
</div>



