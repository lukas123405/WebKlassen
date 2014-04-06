<?php
function hashpw($password){
return sha1(md5($password) . $password);
}



?>