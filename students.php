
<?php


// page protection 


session_start();

if (! isset($_SESSION['adminId'])){

  header("location:login.php");
  
  $errors[] =  "please login first";
  $_SESSION['errors'] = $errors;
    }


    

?>

<?php include("inc/header.php") ;?>

<title> admin student data</title>
    <div class="container my-5">
        <div class="col-md-10 offset-md-1">

        <h3>Welcome MR <?= ucfirst($_SESSION['adminName']);?> </h3>
        <hr>
        <h1>All Registered Students</h1>

        <?php
        include("inc/conn.php");

            $sql = "SELECT * FROM student";
            $result = mysqli_query($conn,$sql);
            $students = mysqli_fetch_all($result,MYSQLI_ASSOC);


             
            ?>


            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">Faculty</th>
                    <th scope="col">year</th>
                    <th scope="col">created at</th>
                  </tr>
                </thead>




                <tbody>
                  <?php foreach($students as $student){?>
                  <tr>
                    <!-- <th scope="row">1</th> -->
                    <td><?=$student['id'];?></td>
                    <td><?=$student['name'];?></td>
                    <td><?=$student['email'];?></td>
                    <td><?=$student['phone'];?></td>
                    <td><?=$student['spec'];?></td> 
                    <td><?=$student['year'];?></td>
                    <td><?=$student['created_at'];?></td>
                         
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
       <!--  logout button -->
    <div class="container px-6"> 

      <a class="btn btn-primary" href="logout.php" role="button">Logout</a>
       
    </div>

    <?php include("inc/footer.php") ;?>