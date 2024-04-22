<?php
session_start();

include 'database.php';


if(isset($_POST['delete-travail-rs'])){
    $idT=$_SESSION['$idT'];
    $sql="delete from `demande_mission` where id =$idT";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "delete successfull";
        header('location:RS.php');
    }else {
        echo "id is $idT";
        echo "<br>";
        die(mysqli_error($conn));
    }
}
?>