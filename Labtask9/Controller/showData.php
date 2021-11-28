<?php 
require 'Model/model.php';
$data=showData($_SESSION['hid']);

       $hname = $data['hname'] ;
       $husername=$data['husername'] ;
       $hpassword=$data['hpassword'] ;
       $hemail=$data['hemail'] ;
       $hlocation=$data['hlocation'] ;
       $hphone=$data['hphone'] ;
       $hedate=$data['hedate'];
       $hosid=$data['hosid'];
       $hicuseatno=$data['hicuseatno'];
       $hoswno=$data['hoswno'];
       $hosnoseat=$data['hosnoseat'] ;
       $hcabinno=$data['hcabinno'];
       $hoxav=$data['hoxav'] ;

?>