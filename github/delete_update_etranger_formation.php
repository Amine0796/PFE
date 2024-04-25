<?php
session_start();

include 'database.php';


if(isset($_POST['delete-etranger-formation'])){
    $idFE=$_GET["idRSF"];
    $sql="delete from `etranger` where id =$idFE";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "delete successfull";
        header('location:chef-formation.php');
    }else {
        echo "id is $idFE";
        echo "<br>";
        die(mysqli_error($conn));
    }
}
?>