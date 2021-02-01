
<?php session_start();?>

<?php include("inc/header.php") ;?>


    <title>Admin Data</title>

    <div class="container my-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">

                <?php include("inc/errors.php");?>

                    <form  method="POST" action="handlers/handle-login.php">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  <?php include("inc/footer.php") ;?>
