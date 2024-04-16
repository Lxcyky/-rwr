<?php
// 包含数据库连接
include_once './dao/conn.php';

// 获取用户ID
$id = $_GET['id'];

// 查询语句
$sql = "SELECT * FROM users WHERE uid = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>用户修改</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet'
		type='text/css'>
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
						<li><a href="./index.php">用户列表</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="templatemo-content-container">
			<div class="templatemo-content-widget white-bg">
				<h2 class="margin-bottom-10">修改信息</h2>
				<p> </p>
				<hr>
				<form action="./dao/doUserUpdate.php" class="templatemo-login-form" method="post">
				<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
						
							<input type="hidden" name="uid" value="<?php echo $row['uid']?>" />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
							<label>用户名</label>
							<input type="text" class="form-control" id="inputFirstName" name="username"
								value="<?php echo $row['username']?>" />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
							<label>密码</label>
							<input type="password" class="form-control" id="inputCurrentPassword" name="password"
								value="<?php echo $row['password']?>" />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
							<label>邮箱</label>
							<input type="email" class="form-control" id="inputEmail" name="email"
								value="<?php echo $row['email']?>" />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
							<label>性别</label>
							<div class="col-lg-12 form-group">
								<div class="margin-right-15 templatemo-inline-block">
									<input type="radio" name="sex" id="r4" value="男"  <?php if($row['sex'] == "男")echo "checked" ?>/>
									<label for="r4" class="font-weight-400"><span></span>男</label>
								</div>
								<div class="margin-right-15 templatemo-inline-block">
									<input type="radio" name="sex" id="r5" value="女" <?php if($row['sex'] == "女")echo "checked" ?>/>
									<label for="r5" class="font-weight-400"><span></span>女</label>
								</div>
							</div>
						</div>
					</div>
<?php
	}
	$conn = null;
?>
					<div class="row form-group">
						<button type="submit" class="templatemo-blue-button">修改</button>
						<button type="reset" class="templatemo-white-button">重置</button>
					</div>
				</form>
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
