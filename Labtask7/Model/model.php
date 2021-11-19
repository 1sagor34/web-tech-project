<?php 

require_once 'db_connect.php';

function addData($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `hospital`(`hname`, `husername`, `hpassword`, `hemail`, `hlocation`, `hphone`, `hedate`, `hosid`, `hicuseatno`, `hoswno`,`hosnoseat`,`hcabinno`,`hoxav`)  VALUES (:hname, :husername, :hpassword, :hemail, :hlocation, :hphone, :hedate, :hosid, :hicuseatno, :hoswno, :hosnoseat, :hcabinno, :hoxav)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':hname' => $_POST['hname'],
            ':husername' => $_POST['husername'],
            ':hpassword' => $_POST['hpassword'],
            ':hemail' => $_POST['hemail'],
            ':hlocation' => $_POST['hlocation'],
            ':hphone' => $_POST['hphone'],
            ':hedate' => $_POST['hedate'],
            ':hosid' => $_POST['hosid'],
            ':hicuseatno' => $_POST['hicuseatno'],
            ':hoswno' => $_POST['hoswno'],
            ':hosnoseat' => $_POST['hosnoseat'],
            ':hcabinno' => $_POST['hcabinno'],
            ':hoxav' => $_POST['hoxav'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


// function updateData($id, $data){
//     $conn = db_conn();
//     $selectQuery = "UPDATE `hospital` set `hname` = ? `husername` = ? `hpassword` = ? `hemail` = ? `hlocation` = ? `hphone` = ? `hedate` = ? `hosid` = ? `hicuseatno` = ? `hoswno` = ? `hosnoseat` = ? `hcabinno` = ? `hoxav` where `hid` = ?";
//     try{
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([
//             $data['hname'], $data['husername'], $data['hpassword'], $data['hemail'], $data['hlocation'], $data['hphone'],$data['hedate'],$data['hosid'],$data['hicuseatno'],$data['hoswno'],$data['hosnoseat'],$data['hcabinno'], $data['hoxav'],$hid
//         ]);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
    
//     $conn = null;
//     return true;
// }

function updatePassword($hid, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `hospital` set `hpassword` = ? where `hid` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data, $hid
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}





function showData($hid){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `hospital` where `hid` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$hid]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

function getID($husername,$hpassword)
{
    $conn = db_conn();
    $sql = "SELECT * FROM `hospital` WHERE `husername`= '$husername'  and `hpassword` = '$hpassword' ;";
          $result = $conn->query($sql);
    if ($result->rowCount() > 0){
    $fetch = $result->fetch();
    return $fetch;

    }
    else{
        return "";
    }
    
}
// function getID2($hpassword)
// {
//     $conn = db_conn();
//     $sql = "SELECT * FROM `hospital` WHERE `hpassword` = '$hpassword' ;";
//           $result = $conn->query($sql);
//     if ($result->rowCount() > 0){
//     $fetch = $result->fetch();
//     return $fetch;

//     }
//     else{
//         return "";
//     }
    
// }
?>