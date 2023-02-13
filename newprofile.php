<?php

$login = $_POST['username'];
$password = MD5($_POST['password']);
$connect = mysqli_connect('localhost','admin','Y2GzLRpQW6s94CF8');
$db = mysqli_select_db('goaltracker');
$query_select = "SELECT login FROM users WHERE login = '$login'";
$select = mysqli_query($query_select,$connect);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('Please, fill the field!');window.location.href='
    register.php';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>
        alert('This login is taken!');window.location.href='
        register.php';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($query,$connect);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('New profile created!');window.location.
          href='register.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('There was en error creating this profile');window.location
          .href='register.php'</script>";
        }
      }
    }
?>