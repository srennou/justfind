<?php 
require_once 'include/initialize.php';

@session_start();

unset($_SESSION['APPLICANTID']);
unset($_SESSION['USERNAME']);    

redirect(web_root."index.php");
