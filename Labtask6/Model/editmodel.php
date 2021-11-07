<?php
function editaddData($data){
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






?>

