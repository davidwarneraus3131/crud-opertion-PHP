<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Data for Teckzy Company</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="list.css">

</head>
<style>

body{

/* background:linear-gradient(rgba(0,0,0,1)) ,(rgba(0,0,0,.7),url(https://images.pexels.com/photos/1647962/pexels-photo-1647962.jpeg?auto=compress&cs=tinysrgb&w=600)); */

background: linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)),url(https://images.pexels.com/photos/1370298/pexels-photo-1370298.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
background-size: 100%;
background-image: no-repeat;}


.highlight{
    color:white;
    border:1px solid green;
}



</style>
<body>
    





<table class="highlight">
    <tr>
        <td>S.NO</td>
        <td>FirstName</td>
        <td>LastName</td>
        <td>Company</td>
        <td>Role</td>
        <td>Martial Status</td>
        <td>E-Mail id</td>
        <td>Contact NO</td>
        <td>Aadhar NO</td>
        <td>PAN Card No</td>
        <td>bank</td>
        <td>IFSC Code</td>
        <td>Action</td>
    </tr>







    <?php
    
    include 'db.php';
    
    $sql = "select * from applications";
    $result = $db->query($sql);
    //print_r($result);

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
          echo "<tr>
                <td>$row[id]</td>
                <td>$row[firstname]</td>
                <td>$row[lastname]</td>
                <td>$row[company]</td>
                <td>$row[designation]</td>
                <td>$row[relation]</td>
                <td>$row[email]</td>
                <td>$row[aadhar]</td>
                <td>$row[pan]</td>
                <td>$row[bank]</td>
                <td>$row[ifsc]</td>
                
                
                <td><a href='edit.php?id=$row[id]'>Edit</a>
                <a href='delete.php?id=$row[id]'>Delete</a></td>
                </tr>
                ";
        }

    } else {
        echo "<tr><td colspan='4'>No records found</td></tr>";
    }

    
    ?>
</table>
</body>
</html>


<?php

if(isset($_GET['msg'])){
    echo $_GET['msg'];
}

?>

