<?php
// created by Wei Wei
session_start();
require 'ValidateCode.php';  //include the class of captcha
$_vc = new ValidateCode();  // an object of the class
$_vc->doimg();  
$_SESSION['authnum_session'] = $_vc->getCode();//capthca is saved in the SESSION


?>