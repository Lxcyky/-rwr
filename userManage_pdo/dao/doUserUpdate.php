<?php
// 数据库连接
include_once('conn.php');

// 编辑用户信息
if ($_POST) {
    // 获取表单提交的数据
    $id = $_POST['uid']; // 注意这里使用的是 $_POST['uid'] 而不是 $_POST['id']
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];

    // 准备更新用户信息的 SQL 查询语句
    $sql = "UPDATE users SET username=?, password=?, sex=?, email=? WHERE uid=?";
    $stmt = $conn->prepare($sql);

    // 绑定参数
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $password);
    $stmt->bindParam(3, $sex);
    $stmt->bindParam(4, $email);
    $stmt->bindParam(5, $id);


    // 执行查询
    $stmt->execute();
    $rowCount = $stmt->rowCount();
    // 检查执行是否成功
    if ($rowCount > 0) {
        echo "用户信息更新成功,等待1秒回到主页";
        header('Refresh: 0.1; url=../index.php');
    } else {
        echo "用户信息更新失败";
    }

    // 关闭查询和连接
    $stmt = null;
    $conn = null;
}
