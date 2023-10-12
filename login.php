<?php $pagedesc = "Login"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>LOREM Cafe and Resto - <?php echo $pagedesc ?></title>

	<link href="foto/icon.png" rel="icon" type="images/x-icon">

	<!-- Bootstrap Core CSS -->
	<link href="libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="dist/css/offline-font.css" rel="stylesheet">
	<link href="dist/css/custom.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery -->
	<script src="libs/jquery/dist/jquery.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body style="background-image: url(bg/bg-1.jpg)">

	<section id="main-wrapper" style="margin-top: 120px">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4"><?php include("layout_alert.php"); ?></div>
			</div><!-- /.row -->
			<div class="row">
				<div id="page-wrapper" class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4" style="background-color: #000000; border-radius: 3px; webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05); box-shadow: 0 1px 1px rgba(0,0,0,.05)">
					<div class="row">
						<div class="col-lg-12">
							<br/>
							<center><img src="foto/icon.png" width="120" height="120"></center>
							<b class="text-left" style="color: #ffffff"><h1 style="font-size: 20px">Welcome to <span style="font-weight: bold; color: #CC7E23;">LOREM</span></h1>
								<h2 style="font-size: 40px">Cafe and Resto</h2></b>
						</div>
					</div><!-- /.row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default" style="background-color: #000000">
								<div class="panel-body">
									<form action="login_auth.php" method="post">
										<div class="form-group">
											<input style="background-color: #000000; color: #ffffff;" type="text" class="form-control" name="username" placeholder="Username" required>
										</div>
										<div class="form-group">
											<input style="background-color: #000000; color: #ffffff;" type="password" class="form-control" name="password" placeholder="Password" required>
										</div>
										<div class="form-group">
											<select class="form-control" name="akses" required style="background-color: #000000; color: #ffffff;">
											<option value=""> Login Sebagai </option>
											<option value="Admin">Admin</option>
											<option value="Kasir">Kasir</option>
											</select>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-success btn-block" style="background-color: #CC7E23; border: 0.5px solid #CC7E23" name="login" value="Masuk">
										</div>
									</form>
								</div>
							</div>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
</body>
</html>