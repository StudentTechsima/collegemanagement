<?php
    include 'dbconnect1.php';
    $sql="SELECT * FROM signupdata";
    $result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
</head>
<body>
    <script type="text/javascript">
        window.setTimeout(() => {
            document.getElementById('successmsg').style.display='none';
        }, 1000);
    </script>
    <?php if(isset($_GET['success'])){?>
    <h5 style="color:green;"id="successmsg">
    <?php echo $_GET['success']; ?>
    </h5>
    <?php } ?>
    <!-- <a href="creata.php"><button>Add Data</button></a> -->
    <table border="1">
        <tr>
            <th>#Id</th>
            <th>F_Name</th>
            <th>L_Name</th>
            <th>Email</th>
            <th>N_Password</th>
            <th>C_Password</th>
            <th>Action</th>            
        </tr>
        <?php  
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['Id'] ?></td>
            <td><?php echo $row['F_Name'] ?></td>
            <td><?php echo $row['L_Name'] ?></td>
            <td><?php echo $row['Email'] ?></td>
            <td><?php echo $row['N_Password'] ?></td>
            <td><?php echo $row['C_Password'] ?></td>
           <td><a href="update.php?id=<?php echo $row['Id'];?>"><button>Edit</button></a><a href="delete.php?id=<?php echo $row['Id'];?>"><button>Delete</button></a></td>
        </tr>
        <?php 
                }
            } ?>
    </table>
</body>
</html>