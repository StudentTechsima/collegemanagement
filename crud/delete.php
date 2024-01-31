<?php
include 'dbconnect1.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM signupdata WHERE Id=$id";
    if(mysqli_query($con,$sql)){
        header('Location:read.php?success=Record Deleted');
    }else{
        header('Location:read.php');
    }
}
?>