<?php
session_start();

include 'database.php';

if(isset($_POST['delete-formation'])){
    $id=$_SESSION['id'];
    $sql="delete from `formation` where id =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "delete successfull";
        header('location:chef-formation.php');
    }else {
        echo "id is $id";
        echo "<br>";
        die(mysqli_error($conn));
    }
}
?>