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

            <?php include "./includes/short_url_form.php";?>
            <?php include "./includes/short_urls.php";?>

        </div>
        <hr>
        <?php 
            $query_url = "SELECT * FROM urls";
            $select_all_urls_query = mysqli_query($connection, $query_url);
            while($row = mysqli_fetch_assoc($select_all_urls_query)){
                $url_long = $row['url_long'];
                $url_base = $row['url_base'];
                $url_author = $row['url_author'];
                $url_date = $row['url_date'];
            }
            if(isset($_GET['delete_urls'])) {
                // echo "<h1>Working</h1>";
                $the_url_id = $_GET['delete_urls'];
                $query = "DELETE FROM urls WHERE url_author IS NULL AND url_date < DATE_SUB(NOW(), INTERVAL 2 DAY) ";
                $delete_query = mysqli_query($connection, $query);
                header("Location: index.php");
            }  
        ?>
        <div class="container">
            <?php include "overview.php";?>
        </div>

        <form action="" method="get" enctype="multipart/form-data">
            <input type="submit" name="delete_urls" value="Delete" id="btn-login" class="btn btn-custom btn-danger">
            <span>This button will delete URLs if they dont have user and 30 days old</span>
            <!-- <a onClick=\"javascript:return confirm('Are you sure want to delete?')\" href='your_urls.php?delete={$url_id}'>Delete</a> -->
        </form>
        <hr>

<?php include "includes/footer.php"; ?>

