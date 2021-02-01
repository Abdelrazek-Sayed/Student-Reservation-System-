

<?php session_start();?>

<?php include("inc/header.php") ;?>
<title>Student Data</title>
<div class="container py-5">
  <div class="row">
    <div class="col-sm">


<?php include("inc/errors.php");?>

<?php include("inc/success.php");?>


<form method="POST" action="handlers/handle-index.php">

  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Academic Year</label>
    <select   name="year" class="form-control" id="exampleInputPassword1">
     <option value="1">1st</option>
     <option value="2">2nd</option>
     <option value="3">3rd</option>
     <option value="4">4th</option>
     <option value="5">5th</option>

    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Faculty</label>
    <input type="text" name="spec" class="form-control" id="exampleInputPassword1">
  </div>
   
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


    </div>
    <div class="col-sm">
      
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>


   <?php include("inc/footer.php") ;?>