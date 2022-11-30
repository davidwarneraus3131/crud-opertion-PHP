
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    
  <button class="button">Click Me Register Your Details</button>         
<div class="pa">
<div class="class">

<h1><u>
    Register Page</u></h1>


<form action="" method="post" enctype="multipart/form-data" onsubmit="return validate()" >
    

        
<div class="one"><div class="red">
<label for="">FirstName:</label>
    <input type="text" name="firstname"  id="firstname" placeholder="Name" ><br><br></div>
<div class="red">
    <label for="">LastName:</label>
    <input type="text" name="lastname" id="lastname" placeholder="lastname"><br><br></div></div>


<!-- 
    <label for="">DOB:</label>
    <input type="date" name="dob" id="dob" placeholder="lastname"><br><br> -->
<div class="two"><div class="red">
    <label for="">Company:</label>
    <input type="text" name="company" id="company" placeholder="company"><br><br></div>
    <div class="red">
    <label for=""> Designation:</label>
    <input type="text" name="designation"id="designation" placeholder="designation"><br><br></div></div>


<div class="three"><div class="red">
    <label for="">  Martial Status:</label>
    <input type="text" name="relation" id="relation" placeholder="relation"><br><br></div>
    <div class="red">
    <label for="">Email:</label>
    <input type="text" name="email"id="email" placeholder="email"><br><br></div></div>



<div class="four"><div class="red">
    <label for="">Contact NO:</label>
    <input type="text" name="contact" id="contact" placeholder="contact no"><br><br></div>
    <div class="red">
    <label for="">Aadhar no:</label>
    <input type="text" name="aadhar" id="aadhar" placeholder="aadhar"><br><br></div></div>


<div class="five"><div class="red">
    <label for="">Pan Card no:</label>
    <input type="text" name="pan" id="pan" placeholder="pan card number"><br><br></div>
    <div class="red">
    <label for="">Bank NAme:</label>
    <input type="text" name="bank" id="bank"  placeholder="bank name"><br><br></div></div>

    <div class="email">
    <label for="">IFSC code:</label>
    <input type="text" name="ifsc"id="ifsc" placeholder="ifsc code"><br><br></div>

<div class="footer">
<p>Upload your Resume</p>
    <input type="file" name="file_upload" id="" />
    <input type="submit" value="Upload" /><br><br>


    <input type="submit" name="submit" value="Submit"><br>
    <a href="login.php">submit</a></div>
   
    
</form>

</div>
</div>

<!-- html form complted -->



<!-- form validatiom using javascript -->
<script src="jquery-3.6.1.min.js"></script>

  
<script>

$(document).ready(function(){
  $(".button").click(function(){
    $(".pa").slideToggle("slow");
  });
});

      



        function validate(){
            var firstname = document.getElementById('firstname').value;
            var lastname = document.getElementById('lastname').value;
            var company = document.getElementById('company').value;
            var designation = document.getElementById('designation').value;
            var relation = document.getElementById('relation').value;
            var email = document.getElementById('email').value;
            var contact = document.getElementById('contact').value;
            var aadhar = document.getElementById('aadhar').value;
            var pan = document.getElementById('pan').value;
            var bank = document.getElementById('bank').value;
            var ifsc = document.getElementById('ifsc').value;
       
         if(firstname==""){
                alert(" Enter your Firstname");
                return false;
            }
            // else{
            //     var nameReg = /^[a-zA-Z ]{2,30}$/;
            //     if(!nameReg.test(name)){
            //         alert("Please enter valid name");
            //         return false;
            //     }
            

            if(lastname == ""){
                alert("enter last name");
                return false;
            }
            // else{
               
            //         alert("Please enter valid name");
            //         return false;
             
            // }

        //  }


        if(company == ""){
                alert(" enter company");
                return false;
            }

        if(designation == ""){
                alert(" enter your Role");
                return false;
            }

        if(relation == ""){
                alert("enter single or married");
                return false;
            }

        if(email == ""){
                alert("enter Your  emailid");
                return false;
            }

        if(contact== ""){
                alert(" enter your contact number");
                return false;
            }

        if(aadhar == ""){
                alert(" enter aadhar number");
                return false;
            }

        if(bank == ""){
                alert("enter your bank name");
                return false;
            }

        if(ifsc == ""){
                alert("Enter ifsc code");
                return false;
            }
        }

    </script>







</body>
</html>

<?php  

include 'db.php';

if(isset($_POST['submit'])){

   
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $company=$_POST['company'];
    $designation=$_POST['designation'];
    $relation=$_POST['relation'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $aadhar=$_POST['aadhar'];
    $pan=$_POST['pan'];
    $bank=$_POST['bank'];
    $ifsc=$_POST['ifsc'];
   

    // $en_ps = base64_encode($passcode);

    $sql="INSERT INTO `applications`( `firstname`, `lastname`, `company`, `designation`, `relation`, `email`, `contact`, `aadhar`, `pan`, `bank`, `ifsc`) VALUES ('$firstname','$lastname','$company','$designation','$relation','$email','$contact','$aadhar','$pan','$bank','$ifsc')";

    if($db->query($sql)){
        echo"<script>
        
        window.location.assign('login.php');
        </script>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . $db->error;
    }

}



?>


<?php

print_r($_FILES);

if(isset($_FILES['file_upload'])){
    print_r($_FILES);

    $file_name = $_FILES['file_upload']['name'];
    $file_tmp = $_FILES['file_upload']['tmp_name'];
    $file_size = $_FILES['file_upload']['size'];

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));


    // echo 

    // move_uploaded_file($file_tmp, $file_destination);



    $allowed = array('jpg', 'jpeg', 'png', 'gif', 'JPG', 'JPEG', 'PNG', 'GIF', 'pdf', 'PDF');

    if(in_array($file_ext, $allowed)){
        if($file_size <= 2097){

            $file_destination = 'upload/'.time().$file_name;

            if(move_uploaded_file($file_tmp, $file_destination)){
                echo $file_destination;
            } else{
                echo "Error";
            }
        } else{
            echo 'File size must be less than 2MB';
        }
    } else{
        echo 'File type not allowed';
    }
}

?>
