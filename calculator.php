<!DOCTYPE html>
<html lang="en">
<head>
    <link href="stylecal.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>


<body class="body">
<div class="container">
    <div class="contact">
<form class="form" action="" method="POST">
    <div class="textholder">
    <input type="text" name="n" value="" placeholder="NUMBER 1"><br><br>
    <input type="text" name="n2" value="" placeholder="NUMBER 2"><br><br>
    </div>
    <div class="buttom">
    <input class="color" type="submit" name="a" value="+">
    <input  class="color"type="submit" name="s" value="-">
    <input class="color"type="submit" name="m" value="*">
    <input class="color"type="submit" name="d" value="/">
    </div>
</form>

<?php

if(isset($_POST['a'])){
    $n=$_POST['n'];
    $n2=$_POST['n2'];
    $add=$n+$n2;
    echo "<br>";
    echo "ADD is :". $add;

}
if(isset($_POST['s'])){
    $n=$_POST['n'];
    $n2=$_POST['n2'];
    $sub=$n-$n2;
    echo "<br>";
    echo "sub is :". $sub;

}
if(isset($_POST['m'])){
    $n=$_POST['n'];
    $n2=$_POST['n2'];
    $mul=$n*$n2;
    echo "<br>";
    echo "mul is :". $mul;

}
if(isset($_POST['d'])){
    $n=$_POST['n'];
    $n2=$_POST['n2'];
    $div=$n/$n2;
    echo "<br>";
    echo "div is :". $div;

}
?>

    </div>
</div>





</body>
</html>
