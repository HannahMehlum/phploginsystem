<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>You are now logged out</title>

</head>
<body>

<?php
session_start();
session_destroy();
 echo 'You are now logged out';
?>
    
</body>
</html>

