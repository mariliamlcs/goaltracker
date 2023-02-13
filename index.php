<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="home.css">
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

        <form action="authenticate.php" method="post" autocomplete="off">
        

            <h1><center>login</center></h1>
            <br/>
            <input type="text" name="username" id="username" class="input-login" autocomplete="off" required></input>
            <p class="input-label">username</p>
            <br/>
            <input type="password" name="password" id="password" class="input-login" autocomplete="off" required></input>
            <p class="input-label">password</p> 
               
            <input type="submit" value="ok" autocomplete="off"></input>

            <p class="new-acc">create a profile</p> 

        </form>

        </div>
    </div> <!-- /main -->
</body>
</html>