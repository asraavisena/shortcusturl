<!-- Database -->
<?php include "includes/db.php";?>
<!-- Header -->
<?php include "includes/header.php";?>
<!-- Navigation -->
<?php include "includes/navigation.php";?>

<?php include "functions.php";?>

    <!-- Page Content -->
    <div class="container">
    <?php if(isset($_SESSION['username'])){?>
        <h1>Welcome <?php echo $_SESSION['username']?></h1>
    <?php }?>
        <div>
            <h3><strong>Shorten URL:</strong></h3>

            <?php include "./includes/shorten_link_form.php";?>
            <?php include "urls.php";?>

        </div>
        <hr>

        <div class="container">
            <?php include "overview.php";?>
        </div>
        <hr>

<?php include "includes/footer.php"; ?>

