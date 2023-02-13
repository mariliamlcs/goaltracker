<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400&display=swap" rel="stylesheet">

    <title>Goal Tracker</title>
</head>
<body>
    <div id="main">
        <img src="media/logo.png" id="logo-header"/>
        <div class= "title"><h2>Dashboard</h2></div>
		<p>Welcome back, <?=$_SESSION['name']?>!</p>
    </div> <!-- /main -->
</body>
</html>