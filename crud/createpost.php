<?php
include 'dbconnect1.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'] ? $_POST['fname'] : '';
        $lname=$_POST['lname'] ? $_POST['lname'] : '';
        $email=$_POST['email'] ? $_POST['email'] : '';
        $npassword=$_POST['npassword'] ? $_POST['npassword'] : '';
        $cpassword=$_POST['cpassword'] ? $_POST['cpassword'] : '';
        $sql="INSERT INTO signupdata(F_Name,L_Name,Email,N_Password,C_Password) VALUES('$fname','$lname','$email','$npassword','$cpassword')";
        if(mysqli_query($con,$sql)){
            header('Location:read.php?success=Record inserted successfully');
        }else{
            echo mysqli_query($con);
        }
    }
}