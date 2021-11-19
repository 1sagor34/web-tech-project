<?php
function updateData($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `hospital` set `hid` = ?, `hname` = ?, `husername` = ?, `hpassword` = ?, `hemail` = ?,`hlocation` = ?, `hosid` = ?, `hicuseatno` = ?,`hoswno` = ?,`hosnoseat`= ?,`hcabinno` = ?,`hoxav` = ?,`hedate` = ? ,`hphone` = ? where `hid` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $a=$data['hid'];
        $b=$data['hname'];
        $c=$data['husername'];
        $e=$data['hpassword'];
        $f=$data['hemail'];
        $g=$data['hlocation'];
        $h=$data['hosid'];
        $i=$data['hicuseatno'];
        $j= $data['hoswno'];
        $k=$data['hosnoseat'];
        $l=$data['hcabinno'];
        $m=$data['hoxav'];
        $n=$data['hedate'];
        $o=$data['hphone'];
        $stmt->execute([$a,$b, $c, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o, $id]);
    }catch(PDOException $es){
        echo $es->getMessage();
    }
    
    return true;
}







?>

