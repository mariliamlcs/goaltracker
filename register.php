<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400&display=swap" rel="stylesheet">

    <title>Goal Tracker</title>
</head>
<body>
    <div id="main">
        <img src="media/logo.png" id="logo-header"/>
        <div class=login-component>

        <form action="newprofile.php" method="post" autocomplete="off">
        <?php if (isset($_GET['error'])) { ?>

        <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

            <h1><center>create a profile</center></h1>
            <br/>
            <input type ="text" name="username" class="input-login" autocomplete="off"></input>
            <p class="input-label">username</p>
            <br/>
            <input type="password" name="password" class="input-login" autocomplete="off"></input>
            <p class="input-label">password</p> 
            <input type="email" name="email" class="input-login" autocomplete="off"></input>
            <p class="input-label">e-mail</p> 
               
            <button type="submit" id="register"><img src="media/enter_icon.png" id="button-login"/></button>


        </form>

        </div>
    </div> <!-- /main -->
</body>
</html>