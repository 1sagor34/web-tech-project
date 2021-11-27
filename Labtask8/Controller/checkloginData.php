<?php 
require 'Model/model.php';
$data=getID($_POST['husername'], $_POST['hpassword']);
if($data!= null)
{
	if ($_POST['husername']==$data[2] && $_POST['hpassword']==$data[3]) 
	{
		$husername = $data[2];
  		$hpassword = $data[3];
		$hid = $data[0];
  		return;
	}
}
?>