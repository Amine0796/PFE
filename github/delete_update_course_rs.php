<?php
session_start();

include 'database.php';


if(isset($_POST['delete-course-rs'])){
    $idC=$_GET["idC"];
    $sql="delete from `courses` where id =$idC";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "delete successfull";
        header('location:RS.php');
    }else {
        echo "id is $idC";
        echo "<br>";
        die(mysqli_error($conn));
    }
}
?>