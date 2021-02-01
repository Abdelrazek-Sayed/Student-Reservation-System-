
<?php   



 
session_start();
 if (isset($_POST['submit'])){

  
       $name= trim(htmlspecialchars($_POST['name']));
       $email= trim(htmlspecialchars($_POST['email']));
       $phone= trim(htmlspecialchars($_POST['phone']));
       $spec= trim(htmlspecialchars($_POST['spec']));
       $year= trim(htmlspecialchars($_POST['year']));

$errors = [];
  // validation 
  // name require & string & length
  if (empty($name)){
    $errors[] ="name is required "; 
    }elseif(! is_string($name)){
    $errors[] ="name must be string "; 
    }elseif (strlen($name) >255){
    $errors[] ="name max 255"; 
    }


  // email required & email & length
//   if (! empty($email)) {

      if (! filter_var($email,FILTER_VALIDATE_EMAIL)) {
          $errors[] ="email not valid";
      } elseif (strlen($email) >255) {
          $errors[] ="email max 255";
      }
//   }


// phone  require & string & length
if (empty($phone)){
    $errors[] ="phone is required "; 
    }elseif(! is_string($phone)){
    $errors[] ="phone must be string "; 
    }elseif (strlen($phone) >255){
    $errors[] ="phone max 255"; 
    }


    // spec require & string & length
  if (empty($spec)){
    $errors[] ="spec is required "; 
    }elseif(! is_string($spec)){
    $errors[] ="spec must be string "; 
    }elseif (strlen($spec) >255){
    $errors[] ="spec max 255"; 
    }


    // year  required  
$validYears = ['1','2','3','4','5'];

  if (empty($year)){
    $errors[] ="year is required "; 
    }elseif(! in_array($year,$validYears)){
         $errors[] ="allowed years from 1 to 5 "; 
    }
    


if (empty($errors)) {
  // 100 %
    include("../inc/conn.php");

    $sql = "INSERT INTO student 
    
      (name,email,phone,spec,year)
      VALUES
     ('$name', '$email','$phone','$spec','$year')";

    mysqli_query($conn, $sql);
     
    mysqli_close($conn);

$_SESSION['success']= "Data Saved Successfully";
}else{
    $_SESSION['errors']= $errors;

}

header("location:../index.php");


}

?>

