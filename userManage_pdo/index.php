<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户信息管理</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet">
 </head>
<body>  
	<!-- Main content --> 
	<div class="templatemo-content col-1 light-gray-bg">
		<div class="templatemo-top-nav-container">
			<div class="row">
				<nav class="templatemo-top-nav col-lg-12 col-md-12">
					<ul class="text-uppercase">
						<li><a href="./userAdd.php">添加用户</a></li>
						<li><a href="#" class="active">用户列表</a></li>
					</ul>  
				</nav> 
			</div>
		</div>
		<div class="templatemo-content-container">
			<div class="templatemo-content-widget no-padding">
				<div class="panel panel-default table-responsive">
					<table class="table table-striped table-bordered templatemo-user-table">
						<thead>
							<tr>
								<td><a href="" class="white-text templatemo-sort-by">用户ID <span class="caret"></span></a></td>
								<td><a href="" class="white-text templatemo-sort-by">用户名 <span class="caret"></span></a></td>
								<td><a href="" class="white-text templatemo-sort-by">密码<span class="caret"></span></a></td>
								<td><a href="" class="white-text templatemo-sort-by">邮箱<span class="caret"></span></a></td>
								<td><a href="" class="white-text templatemo-sort-by">性别<span class="caret"></span></a></td>
								<td>操作</td>
							</tr>
						</thead>
						<tbody>
							<?php
								//数据库连接
								include_once './dao/conn.php';
                                
								try {
                                    // 查询
                                    $sql = "select * from users";
                                    $stmt = $conn->query($sql);

                                    // 解析结果
                                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <tr>
                                <td><?php echo $row['uid']?></td>
                                <td><?php echo $row['username']?></td>
                                <td><?php echo $row['password']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['sex']?></td>
                                <td>
                                    <a href="./userUpdate.php?id=<?php echo $row['uid']; ?>">编辑</a>
                                    <a href="./dao/doUserDelete.php?id=<?php echo $row['uid']; ?>">删除</a>
                                </td>
                            </tr>
                            <?php 
                                }




                                // 关闭资源
                                $conn = null;
                            } catch(PDOException $e){
                                echo "Error: " . $e->getMessage();
                            }
                            ?>
						</tbody>
					</table>
				</div>
			</div>
			<footer class="text-right">
				<p>Copyright 2022 CCIT</p>
			</footer>
		</div>
	</div>							
    



	<!-- JS -->
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
	<script type="text/javascript" src="js/templatemo-script.js"></script>
</body>
</html>
