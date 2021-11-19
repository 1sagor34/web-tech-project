<?php 
require_once 'Model/model.php';
$fetch=getID($_SESSION['husername'],$_SESSION['hpassword']);
		if($_POST['current_password'] == test_input($fetch[3]))
		{
			$password = test_input($fetch[3]);
			  return;
		}
?>