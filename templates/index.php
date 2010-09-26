<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>&raquo; <?php echo $config['site_title']; ?></title>
<link rel="stylesheet" type="text/css" media="screen" href="templates/style.css"/>
</head>
<body>
<div id="login" class="login">
<form id="login_form" name="login_form" method="POST" action="login.php">
	<input type="text" name="username" id="username" value="Username" class="login"></input>&nbsp;&nbsp;
	<input type="password" name="password" id="password" value="Password" class="login"></input>&nbsp;&nbsp;
	<button>Login</button>
	</form>
</div>
<div id="main">
	<div id="sign_up">Are you new to <?php echo $config['site_title']?>? <a href="#signup" id="light" class="large button yellow">Sign Up</a></div>
</div>

</div>
<div id="footer">
&copy; 2010 <?php echo $config['site_title']?> <p style="text-align:center">Blog - API - Support</p>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
</body>
</html>