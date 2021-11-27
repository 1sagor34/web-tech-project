<?php

require 'Model/editmodel.php';

if (isset($_SESSION['husername'])){}
else
  {  $hname = $husername= $hpassword= $hconfirm_password= $hemail= $hlocation= $hphone= $hedate= $hosid= $hicuseatno= $hoswno= $hosnoseat= $hcabinno= $hoxav= '';}

$hnameErr = $hnameuserErr = $hpasswordErr= $hconfirm_passwordErr= $hemailErr= $hlocationErr= $hphoneErr= $hedateErr= $hosidErr= $hicuseatnoErr= $hoswnoErr= $hosnoseatErr= $hcabinnoErr= $hoxavErr='';
$flag=1;
$update="on";  
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  if (empty($_POST["hname"])) 
  {
    $hnameErr = "Name is required";
    $flag=0;
    $update="off"; 
  } 
  else 
  {
    $hname = test_input2($_POST["hname"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$hname) || str_word_count($hname)<2 )
    {
      $hnameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $hname="";
      $flag=0;
      $update="off";
    }
  }
  if (empty($_POST["husername"])) 
  {
    $husernameErr = "Name is required";
    $flag=0;
    $update="off"; 
  } 
  else 
  {
    $husername = test_input2($_POST["husername"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$husername) || str_word_count($husername)<2 )
    {
      $husernameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $husername="";
      $flag=0;
      $update="off";
    }
  }


  if (empty($_POST["hpassword"])) 
  {
    $hpasswordErr = "Password is required";
    $flag=0;
  } 
  else 
  {
    $hpassword = test_input2($_POST["hpassword"]);
    if (strlen($hpassword) < 8)
    {
      $hpasswordErr = "Must be atleast 8 characters";
      $hpassword="";
      $flag=0;
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$hpassword)) 
    {
      $hpasswordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
      $hpassword ="";
      $flag=0;
    }
  }

  if (empty($_POST["hconfirm_password"])) 
  {
    $hconfirm_passwordErr = "Password is required";
    $flag=0;
  } 
  else 
  {
    $hconfirm_password = test_input2($_POST["hconfirm_password"]);
    if($hconfirm_password!=$hpassword)
    {
      $hconfirm_passwordErr = "Password dosen't match";
      $hconfirm_password="";
      $flag=0;
    }
  }

      
  if (empty($_POST["hemail"])) 
  {
    $hemailErr = "Email is required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $hemail = test_input2($_POST["hemail"]);
    if (!filter_var($hemail, FILTER_VALIDATE_EMAIL)) 
    {
      $hemailErr = "Invalid email format";
      $hemail="";    
      $flag=0;
      $update="off";
    }
  }


  if (empty($_POST["hlocation"])) 
  {
    $hlocationErr = "hlocation is required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $hlocation = test_input2($_POST["hlocation"]);
  }


  if (empty($_POST["hphone"])) 
  {
    $hphoneErr = "Mobile Number is required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $hphone = test_input2($_POST["hphone"]);
    if(!preg_match('/^[0-9]{3}[0-9]{8}$/', $_POST['hphone']))
    {
      $hphoneErr = "Invalid Number";
      $hphone="";
      $flag=0;
      $update="off";
    }
  }


  if(empty($_POST["hedate"]))  
  {  
    $hedateErr = "Enter established date of hospital";
    $flag=0;  
  }
  else 
  {
    $hedate = test_input2($_POST["hedate"]);
  }


  if (empty($_POST["hosid"])) 
    {
      $hosidErr = "Hospital government ID is required";
      $flag=0;
    } 
    else 
    {
      $hosid = test_input2($_POST["hosid"]);
      if(!preg_match('/^[0-9]$/', $_POST['hosid']))
      {
        $hosidErr = "Invalid Number";
        $hosidErr="";
        $flag=0;
        $update="off";
      }
    }


    if (empty($_POST["hicuseatno"])) 
    {
      $hicuseatnoErr = "Hospital ICU seat number is required";
      $flag=0;
    } 
    else 
    {
      $hicuseatno = test_input2($_POST["hicuseatno"]);
      if(!preg_match('/^[0-9]$/', $_POST['hicuseatno']))
      {
        $hicuseatnoErr = "Invalid Number";
        $hicuseatnoErr="";
        $flag=0;
        $update="off";
      }
    }
  
    if (empty($_POST["hoswno"])) 
    {
      $hoswno = "Hospital ward number is required";
      $flag=0;
    } 
    else 
    {
      $hoswno = test_input2($_POST["hoswno"]);
      if(!preg_match('/^[0-9]$/', $_POST['hoswno']))
      {
        $hoswnoErr = "Invalid Number";
        $hoswnoErr="";
        $flag=0;
        $update="off";
      }
    }


    if (empty($_POST["hosnoseat"])) 
    {
      $hosnoseatErr = "Hospital seat number is required";
      $flag=0;
    } 
    else 
    {
      $hosnoseat = test_input2($_POST["hosnoseat"]);
      if(!preg_match('/^[0-9]$/', $_POST['hosnoseat']))
      {
        $hosnoseatErr = "Invalid Number";
        $hosnoseatErr="";
        $flag=0;
        $update="off";
      }
    }
  
    if (empty($_POST["hcabinno"])) 
    {
      $hcabinnoErr = "Hospital cabin number is required";
      $flag=0;
    } 
    else 
    {
      $hcabinno = test_input2($_POST["hcabinno"]);
      if(!preg_match('/^[0-9]$/', $_POST['hcabinno']))
      {
        $hcabinnoErr = "Invalid Number";
        $hcabinnoErr="";
        $flag=0;
        $update="off";
      }
    }
    
  
  if(empty($_POST["hoxav"]))  
  {  
    $hoxavErr = "Select oxygen avalability"; 
    $flag=0;
    $update="off"; 
  }
  else 
  {
    $hoxav = test_input2($_POST["hoxav"]);
  }


  if ($flag==0) 
  {
    if(isset($_POST["submit"]))  
    {
      $data['hname'] = $_POST['hname'];
      $data['husername'] = $_POST['husername'];
      $data['hpassword'] = $_POST['hpassword'];
      $data['hemail'] = $_POST['hemail'];
      $data['hlocation'] = $_POST['hlocation'];
      $data['hphone'] = $_POST['hphone'];
      $data['hedate'] = $_POST['hedate'];
      $data['hosid'] = $_POST['hosid'];
      $data['hicuseatno'] = $_POST['hicuseatno'];
      $data['hoswno'] = $_POST['hoswno'];
      $data['hosnoseat'] = $_POST['hosnoseat'];
      $data['hcabinno'] = $_POST['hcabinno'];
      $data['hoxav'] = $_POST['hoxav'];
       updateData($_SESSION['hid'], $data); 
        echo 'Successfully Updated';
      }
    }
   
} 

function test_input2($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>