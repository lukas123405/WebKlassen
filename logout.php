<?php
session_start();
foreach($_SESSION as $s){
unset($s);
}
session_destroy();
header("Location: index.php");
?>