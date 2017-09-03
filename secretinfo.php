<?php session_start(); ?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>You are now logged in</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">    
</head>
    
    

<body>
    <h1 id="headline">Welcome</h1>
    

<?php
	
	if (!empty($_SESSION['uid'])){
		echo 'You are now logged in as user '.$_SESSION['un'];
		
	}
	else {
		echo 'You are not logget in';
	}
 
?>
    
   	<img id="banner1 img-responsive" src="banner1.jpg">
    
    <a id="logout"href="Logout.php">
     Log out</a>
    
    
    
</body>
</html>