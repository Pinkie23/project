<?php
//session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Welcome to admistration page</title>
	
	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap-responsive.min.css" />
	<link href="./js/google-code-prettify/prettify.css" rel="stylesheet"
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="./css/style.css" />

</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="#" name="top">ShoeYou</a>
			<div class="nav-collapse collapse">
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container-fluid -->
	</div>
	<!--/.navbar-inner -->
</div>
<!--/.navbar -->
<br></br>
<div class="container">
		<div class="row">
			<div class="span4 offset4 well">
				<legend>Please Sign In</legend>
					<?php  
						// check for a successful form post  
						if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
						// check for a form error  
						elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
					?>
						<form method="POST" action="login_contact_submission.php" accept-charset="UTF-8">
								<input type="text" id="username" class="span4" name="username" placeholder="Username">
								<input type="password" id="password" class="span4" name="password" placeholder="Password">
							<button type="submit" name="submit" class="btn btn-info btn-block">Sign in</button>
						</form>    
			</div>
		</div>
	</div>
	
	<script src="./js/jquery-1.10.0.min.js"></script>
	<script src="./js/bootstrap/js/bootstrap.min.js"></script>
	<script src="./js/holder.js"></script>
	<script src="./js/script.js"></script>
	  <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="./js/jquery.js"></script>
	<script src="./js/google-code-prettify/prettify.js"></script>
    <script src="./js/application.js"></script>
    <script src="./js/bootstrap-transition.js"></script>
    <script src="./js/bootstrap-modal.js"></script>
    <script src="./js/bootstrap-scrollspy.js"></script>
    <script src="./js/bootstrap-alert.js"></script>
    <script src="./js/bootstrap-dropdown.js"></script>
    <script src="./js/bootstrap-tab.js"></script>
    <script src="./js/bootstrap-tooltip.js"></script>
    <script src="./js/bootstrap-popover.js"></script>
    <script src="./js/bootstrap-button.js"></script>
    <script src="./js/bootstrap-collapse.js"></script>
    <script src="./js/bootstrap-carousel.js"></script>
    <script src="./js/bootstrap-typeahead.js"></script>
    <script src="./js/bootstrap-affix.js"></script>
    <script src="./js/jquery.lightbox-0.5.js"></script>
	<script src="./js/bootsshoptgl.js"></script>
	 <script type="text/javascript">
</body>
</html>