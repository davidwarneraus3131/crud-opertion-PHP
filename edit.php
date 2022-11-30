<?php
    include 'db.php';
    $id = $_GET['id'];
    $sql = "select * from applications where id=$id";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
    print_r($data);
?>

<form action="" method="post">
    <input type="text" value="<?php echo $data['firstname']; ?>" name="firstname" placeholder="Name">
    <input type="text" value="<?php echo $data['lastname']; ?>" name="lastname" placeholder="Name">
    <input type="text" value="<?php echo $data['company']; ?>" name="company" placeholder="Name">
    <input type="text" value="<?php echo $data['designation']; ?>" name="designation" placeholder="Name">
    <input type="text" value="<?php echo $data['relation']; ?>" name="relation" placeholder="Name">
    <input type="text" value="<?php echo $data['email']; ?>" name="email" placeholder="Name">
    <input type="text" value="<?php echo $data['aadhar']; ?>" name="aadhar" placeholder="Name">
    <input type="text" value="<?php echo $data['pan']; ?>" name="pan" placeholder="Name">
    <input type="text" value="<?php echo $data['bank']; ?>" name="bank" placeholder="Name">
    <input type="text" value="<?php echo $data['ifsc']; ?>" name="ifsc" placeholder="Name">
    
    

    
    <input type="submit" name="submit" value="Submit">
</form>

<?php

if(isset($_POST['submit'])){

    print_r($_POST);
    extract($_POST);

    

   

    $sql = "update applications set  

    firstname='$firstname',
    lastname='$lastname',
    company='$company',
    designation='$designation',
    relation='$relation',
    email='$email',
    contact='$contact',
    aadhar='$aadhar',
    pan='$pan',
    bank='$bank',
    ifsc='$ifsc'  where id=$id";





    if($db->query($sql)){
        $msg = "Record updated successfully";
    } else{
        $msg = "ERROR: Could not able to execute $sql. " . $db->error;
    }

    header("Location: list.php?msg=$msg");

}

?>