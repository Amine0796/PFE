<?php
session_start();

include 'database.php';


if(isset($_POST['delete-etranger-rs'])){
    $idRSE=$_GET["idRSE"];
    $sql="delete from `etranger` where id =$idRSE";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "delete successfull";
        header('location:RS.php');
    }else {
        echo "id is $idRSE";
        echo "<br>";
        die(mysqli_error($conn));
    }
}
?>