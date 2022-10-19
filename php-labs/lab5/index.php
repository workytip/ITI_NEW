<?php
session_start();
if(!$_SESSION['username']){
    header("Location: login.php");
}else
{
    echo 'Hello '.$_SESSION['username'];

}

?>




<h1><a href="logout.php">Sign Out</a></h1>