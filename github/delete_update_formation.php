<?php
session_start();

include 'database.php';

if(isset($_POST['delete-formation'])){
    $idF= $_GET["idF"];
    $sql="delete from `formation` where id =$idF";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "delete successfull";
        header('location:chef-formation.php');
    }else {
        echo "id is $idF";
        echo "<br>";
        die(mysqli_error($conn));
    }
}



?>