<!-- Database -->
<?php include "includes/db.php";?>
<!-- Header -->
<?php include "includes/header.php";?>
<!-- Navigation -->
<?php include "includes/navigation.php";?>

    <!-- Page Content -->
    <div class="container">
        <div>
            <h1><strong>Testing DB Connect</strong></h1>
            <?php 
                $query_url = "SELECT * FROM url";
                $select_all_urls_query = mysqli_query($connection, $query_url);
                while($row = mysqli_fetch_assoc($select_all_urls_query)){
                    $url_id = $row['url_id'];
                    $url_long = $row['url_long'];
                    $url_short = $row['url_short'];
                    $url_base = $row['url_base'];
                    $date = $row['date'];
                }
            ?>
            <ul>
                <li><?php echo $url_long?></li>
            </ul>

        </div>

        <hr>

<?php include "includes/footer.php"; ?>

