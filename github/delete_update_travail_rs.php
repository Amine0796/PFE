<?php
session_start();

include 'database.php';


if(isset($_POST['delete-travail-rs'])){
    $idT=$_GET['idT'];
    $sql="delete from `travail` where id =$idT";
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