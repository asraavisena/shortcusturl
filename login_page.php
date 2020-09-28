<!-- Database -->
<?php include "includes/db.php";?>
<!-- Header -->
<?php include "includes/header.php";?>
<!-- Navigation -->
<?php include "includes/navigation.php";?>

<?php include "functions.php";?>

<!-- Login -->
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="form-wrap">
            <h4>Log In</h4>
                <form action="./includes/login.php" method="post">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="input-group">
                        <button class="btn btn-primary" name="login" type="submit">Log In</button>
                    </div>
                </form> 
            </div>
        </div> 
    </div> 
</div>

<?php include "includes/footer.php";?>