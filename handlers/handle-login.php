<?php

session_start();
// include("../inc/conn.php");



//
if(isset($_POST['submit'])){

$email =  trim(htmlspecialchars($_POST['email']));
$password = $_POST['password'];


echo "<pre>";
print_r($_POST);
echo "</pre>";
die();

// validation
$errors =[];
// email required -email - length ;
if (empty($email)) {
    $errors[] ="email is required";
}elseif (! filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $errors[] ="email not valid";
} elseif (strlen($email) >255) {
    $errors[] ="email max 255";
}

// password  required - string - 5:25
if (empty($password)) {
    $errors[] ="password is required";
}elseif (! is_string ($password)) {
    $errors[] ="password must be string";
} elseif (strlen($password) < 5 or strlen($password) > 25 ) {
    $errors[] ="password must be btween 5 & 25 chars";
} 

//  
if (empty($errors)){

    // connection  
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "srs-repeat";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    //

    $sql = "SELECT * FROM  admins WHERE email = '$email'";
     $result = mysqli_query($conn, $sql);
     $numRows = mysqli_num_rows($result);

       if ($numRows > 0){
          $admin =  mysqli_fetch_assoc($result); // very important 
           $passwordchek = password_verify($password,$admin['password']);

           if ($passwordchek == true){
            $_SESSION['adminId'] =   $admin['id'];
            $_SESSION['adminName']  = $admin['name'];
            header("location:../students.php");
           

        }else{
            $errors[]= "password not correct";
            $_SESSION['errors'] = $errors;
            header("location:../login.php");
        }
       }else{
           $errors[]= "email not registerred";
           $_SESSION['errors'] = $errors;
           header("location:../login.php");
        }
        



    

     mysqli_close($conn);
}else{
    $_SESSION['errors'] = $errors;
    header("location:../login.php");
}


}


?>