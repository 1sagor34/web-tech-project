<?php
  function editwriteToJson() 
  {
    if(file_exists('Json/data.json'))  
      { 
        $current_data = file_get_contents('Json/data.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
          'hname'        => $_POST['hname'],
          'husername'    => $_POST['husername'],
          'hpassword'    => $_POST['hpassword'],
          'hemail'       => $_POST['hemail'],
          'hlocation'    => $_POST['hlocation'],
          'hphone'       => $_POST['hphone'],
          'hedate'       => $_POST['hedate'],
          'hosid'        => $_POST['hosid'],
          'hicuseatno'   => $_POST['hicuseatno'],
          'hoswno'       => $_POST['hoswno'],
          'hosnoseat'    => $_POST['hosnoseat'],
          'hcabinno'     => $_POST['hcabinno'],
          'hoxav'        => $_POST['hoxav']
        );
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        if(file_put_contents('Json/data.json', $final_data))  
        {  
          echo "Information Updated Successfully";
        } 
      } 
      else  
      {  
        echo "JSON File not exits";  
      }
  }

function readFromJson($file) 
  {
     $data= file_get_contents($file);
     $data= json_decode($data, true);
    return ;
  }
 
?>