<!-- Database -->
<?php include "includes/db.php";?>
<!-- Header -->
<?php include "includes/header.php";?>
<!-- Navigation -->
<?php include "includes/navigation.php";?>

<?php include "functions.php";?>

    <!-- Page Content -->
    <div class="container">
        <div>


            <!-- GET URL -->
            <h1><strong>Testing DB Connect</strong></h1>
            <?php 
                $query_url = "SELECT * FROM urls";
                $select_all_urls_query = mysqli_query($connection, $query_url);
                while($row = mysqli_fetch_assoc($select_all_urls_query)){
                    $url_id = $row['url_id'];
                    $url_long = $row['url_long'];
                    $url_short = $row['url_short'];
                    $url_base = $row['url_base'];
                    $url_date = $row['url_date'];
                }
            ?>
            <ul>
                <li><?php echo $url_long?></li>
                <li></li>
            </ul>
            <?php include "shorten_link_form.php";?>

        </div>

        <hr>

<?php include "includes/footer.php"; ?>

