<html lang="en">
<?php
session_start();
?>

<head>
	<title>Bootstrap Theme Company</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		.modal-header,
		h4,
		.close {
			background-color: #5cb85c;
			color: white !important;
			text-align: center;
			font-size: 30px;
		}
		
		.modal-footer {
			background-color: #f9f9f9;
		}
	</style>
	<style>
		div.calendar {
			width: 100%;
			border: 3px solid gray;
		}
		
		header {
			padding: 2em;
			color: white;
			background-color: #4d88ff;
			clear: right;
			text-align: center;
		}
		
		.tablediv {
			border-left: 3px solid gray;
			margin-top: 2%;
			width: 80%;
			float: right;
		}
		
		.title {
			float: top;
		}
		
		input[type=text],
		input[type=password],
		input[type=date],
		input[type=email] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		/* Set a style for all buttons */
		
		button,
		input[type=button] {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: auto;
		}
		
		button:hover {
			opacity: 0.8;
		}
		
		input[type=button]:hover {
			opacity: 0.8;
		}
	</style>
</head>

<body>
	<div class="jumbotron text-center">
		<h1>Company</h1>
		<p>Facendo schifo ogni giorno di meno</p>
		<?php 
		if(isset($_COOKIE["logRem"])) {
		    echo "<p>Benvenuto</p>";
		}
		?>
		<form class="form-inline" action="prova.php" method="POST">
			<div class="input-group">
				<input type="email" class="form-control" size="50" placeholder="Email Address">
				<div class="input-group-btn">
					<button type="submit" class="btn btn-danger">Subscribe</button>
				</div>
			</div>
		</form>
	</div>

	<nav class="navbar navbar-default navbar-fixed-top col-lg-12">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="#">Logo</a> </div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li> <button type="button" data-toggle="modal" data-target="#myModalReg">REGISTRATI</button>
					</li>
					<li><button type="button" data-toggle="modal" data-target="#myModalLog">Login</button>
					</li>
					<li><a href="#portfolio">PORTFOLIO</a>
					</li>
					<li><a href="#pricing">PRICING</a>
					</li>
					<li><a href="#contact">CONTACT</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<style>
		.bg-grey {
			background-color: #f6f6f6;
		}
	</style>
	<style>
		.jumbotron {
			background-color: #f4511e;
			color: #fff;
			padding: 100px 25px;
		}
		
		.container-fluid {
			padding: 60px 50px;
		}
	</style>
	<style>
		.logo {
			font-size: 200px;
		}
		
		@media screen and (max-width: 768px) {
			.col-sm-4 {
				text-align: center;
				margin: 25px 0;
			}
		}
	</style>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<h2>About Company Page</h2>
				<h4>Lorem ipsum..</h4>
				<p>Lorem ipsum..</p>
				<button class="btn btn-default btn-lg">Get in Touch</button>
			</div>
			<div class="col-sm-4"> <span class="glyphicon glyphicon-signal logo"></span> </div>
		</div>
	</div>

	<div class="modal fade" id="myModalReg" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" style="padding:35px 50px;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4><span class="glyphicon glyphicon-lock"></span> Registrati</h4>
				</div>
				<div class="modal-body" style="padding:40px 50px;">
					<form action="registrazione.php" method="POST" role="form">
						<div class="form-group">
							<label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
							<input type="text" class="form-control" id="usrname" name="email" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
							<input type="password" class="form-control" id="psw" name="psw" placeholder="Enter password">
						</div>
						<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Registrati</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Chiudi</button>

				</div>
			</div>

		</div>
	</div>

	<div class="modal fade" id="myModalLog" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" style="padding:35px 50px;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
				</div>
				<div class="modal-body" style="padding:40px 50px;">
					<form action="login.php" method="POST" role="form">
						<div class="form-group">
							<label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
							<input type="text" class="form-control" id="usrname" name="email" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
							<input type="password" class="form-control" id="psw" name="psw" placeholder="Enter password">
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="" name="check" checked>Remember me</label>
						</div>
						<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
					<p>Not a member? <a href="#">Sign Up</a>
					</p>
					<p>Forgot <a href="#">Password?</a>
					</p>
				</div>
			</div>

		</div>
	</div>


	<div class="container-fluid bg-grey">
		<div class="row">
			<div class="col-sm-4"> <span class="glyphicon glyphicon-globe logo"></span> </div>
			<div class="col-sm-8">
				<h2>Our Values</h2>
				<h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4>
				<p><strong>VISION:</strong> Our vision Lorem ipsum..</p>
			</div>
		</div>
	</div>
	<div id="googleMap" style="height:400px;width:100%;"></div>
	<script>
		function myMap() {
			var myCenter = new google.maps.LatLng( 41.878114, -87.629798 );
			var mapProp = {
				center: myCenter,
				zoom: 12,
				scrollwheel: false,
				draggable: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			var map = new google.maps.Map( document.getElementById( "googleMap" ), mapProp );
			var marker = new google.maps.Marker( {
				position: myCenter
			} );
			marker.setMap( map );
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
</body>

</html>