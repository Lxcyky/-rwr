<?php
try{
    $conn = new PDO("mysql:host=localhost;port=3306;dbname=shopdata",'root','');
    echo "数据库连接成功！<br>";
}catch(PDOException $e){
    die("数据库连接失败".$e->getMessage());
}


$conn->exec("set names utf8");
	
