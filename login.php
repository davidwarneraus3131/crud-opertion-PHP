

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
<div class="clas">
<h1><u>Log in Page</u></h1>
<fieldset>
<form action="" method="post">

<label for="">FirstName:</label>
<input type="text" name="firstname" placeholder="firstname"><br><br>
<label for="">Email id:</label>
    <input type="text" name="email" placeholder="email"><br><br>
 
    <input type="submit" name="login" value="Login">
</form></fieldset>


<p>If You have not  account?</p><a href="signup.php">sign up</a>

</div>
</body>
</html>






<?php
//login check

include 'db.php';

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $firstname=$_POST['firstname'];

    

    $sql = "SELECT * FROM applications WHERE email = '$email' AND firstname = '$firstname'";
    
    $result = $db->query($sql);

    if($result->num_rows==1){
        
        header("Location: list.php");

    } else {
        echo "Login Failed";
    }

}

?>