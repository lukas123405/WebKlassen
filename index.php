<?php
session_start();
if(isset($_SESSION["username"]) && $_SESSION["username"] != ""){
header("Location: main.php");
}else{
header("Location:login.php");
}
?>