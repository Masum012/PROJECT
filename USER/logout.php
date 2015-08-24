<?php
session_start(); 
if( isset($_COOKIE['association']))
echo "adfasdasd";
else echo "true";
setcookie("association","",time()-7200,"/");

session_destroy();
header("Location:../ALL/login.php");
?>