<?php

session_start();

?>
<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Ticket Reservation</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">

</head>

<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"> Online Ticketing</a>
			<ul class="nav navbar-nav">
				<li>
					<a href="#"></a>
				</li>
				<li>
					<a href="#"></a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="../"><span class="glyphicon glyphicon-backward"></span> Return Home</a></li>
			</ul>
		</div>
	</nav>



	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Create Account</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" id="form-login" action="create.php" method="post">
					<div class="form-group">
						<label class="control-label col-sm-2" for="name">name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" placeholder=" ammar hassan alnouirah" name="name" autofocus="" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Email:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder=" test@gmail.com" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="phone">Phone:</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="phone" name="phone" placeholder=" 776655445" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="password">Password:</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="password" name="password" placeholder=" 8djF3jkd65s" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="gender">Gender:</label>
						<div class="col-sm-10">
							<select name="gender" id="gender" class="form-control">
								<option value="1">Male</option>
								<option value="2">Female</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="age">Age:</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="age" name="age" placeholder=" 24" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="address">address:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="address" name="address" placeholder=" san'a - musaik" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="address">image:</label>
						<div class="col-sm-10">
							<input type="file" class="form-control" id="image" name="image" placeholder="" >
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default" name="sign_up">Save
								<span class="glyphicon glyphicon-check" aria-hidden="true"></span>
							</button>
						</div>
					</div>
					<?php
					
					if(isset($_SESSION['message'])){
					?>

						<div class="alert alert-success">
							<?php 
									echo $_SESSION['message'];
									session_destroy();
							?>
						</div>
					<?php
					}
					
					?>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>


	<?php require_once('modal/message.php'); ?>

	<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>

	<!-- <script type="text/javascript">
	$(document).on('submit', '#form-login', function(event) {
		event.preventDefault();
		var un = $('#un').val();
		var pwd = $('#pwd').val();

		$.ajax({
				url: '../data/login.php',
				type: 'post',
				dataType: 'json',
					data: {
						un: un,
						pwd : pwd
					},
				success: function (data) {
					if(data.valid == true){
						window.location = data.url;
					}else{
						$('#modal-message').find('#body-cont').text(data.msg);
						$('#modal-message').modal('show');
						$('#un').val("");
						$('#pwd').val("");
						$('#un').focus();
					}
				},
				error: function(){
					alert('Error: L99+');
				}
			});
	});

</script> -->

</body>

</html>