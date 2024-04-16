<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户添加</title>
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
					 <li><a href="#" class="active">添加用户</a></li>
						<li><a href="./index.php">用户列表</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="templatemo-content-container">
			<div class="templatemo-content-widget white-bg">
				<h2 class="margin-bottom-10">用户信息</h2>
				<p>  </p>
				<hr>
				<form action="./dao/doUserAdd.php" class="templatemo-login-form" method="post">
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
							<label>用户名</label>
							<input type="text" class="form-control" id="inputFirstName" placeholder="John" name="username" />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
							<label>密码</label>
							<input type="password" class="form-control" id="inputCurrentPassword" placeholder="********" name="password" />
						</div>
					</div>
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">
							<label>邮箱</label>
							<input type="email" class="form-control" id="inputEmail" placeholder="admin@company.com" name="email" />
						</div> 
					</div> 
					<div class="row form-group">
						<div class="col-lg-6 col-md-6 form-group">                  
							<label>性别</label>
							<div class="col-lg-12 form-group">
								<div class="margin-right-15 templatemo-inline-block">
									<input type="radio" name="sex" id="r4" value="男" checked />
									<label for="r4" class="font-weight-400"><span></span>男</label>
								</div>
								<div class="margin-right-15 templatemo-inline-block">
									<input type="radio" name="sex" id="r5" value="女" />
									<label for="r5" class="font-weight-400"><span></span>女</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<button type="submit" class="templatemo-blue-button">添加</button>
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
