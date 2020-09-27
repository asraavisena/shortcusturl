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
            <h1><strong>Testing DB Connect</strong></h1>

            <?php include "shorten_link_form.php";?>

            <?php 
            // http://localhost:8888/shortCusturl/?url_base=4542c
                if(isset($_GET['url_base'])){
                    $the_url_base = $_GET['url_base'];

                    $url_base = mysqli_real_escape_string($connection, $the_url_base);
                    $query_url_link = "SELECT url_long FROM urls WHERE url_base = '$url_base' ";
                    $select_all_urls_query = mysqli_query($connection, $query_url_link);

                    while($row = mysqli_fetch_assoc($select_all_urls_query)){
                        $link= $row['url_long'];
                        header("Location:" . $link);
                        
                    }
                    $view_query = "UPDATE urls SET url_views_count = url_views_count + 1 WHERE url_base = '$url_base' ";
                    $send_view_query = mysqli_query($connection, $view_query);

                    if(!$send_view_query){
                        die("QUERY FAILED" . $connection);
                    }
                }
            ?>

        </div>

        <hr>

<?php include "includes/footer.php"; ?>

