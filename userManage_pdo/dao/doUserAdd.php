<?php
// 添加用户信息

if ($_POST) {
    // 连接数据库
    include_once('conn.php');

    // 准备SQL
    $sql = "INSERT INTO users (username, password, sex, email) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // 绑定数据
	$stmt->bindParam(1, $_POST['username']);
	$stmt->bindParam(2, $_POST['password']);
	$stmt->bindParam(3, $_POST['sex']);
	$stmt->bindParam(4, $_POST['email']);

    // 执行SQL
    $stmt->execute();

    if ($stmt->errorCode() !== '00000') {
        echo '插入数据出错，3秒后跳转至首页';
    } else {
        echo '插入成功，3秒后跳转至首页';	
    }

    $stmt->closeCursor(); // 关闭游标
    $conn = null; // 关闭数据库连接
    header('Refresh: 3; url=../index.php');
}
?>
