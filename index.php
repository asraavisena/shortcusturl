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
            <!-- POST URL -->
            <?php 
            if(isset($_POST['send_url'])){
                
                $url_long = $_POST['url_long'];
                $url_short = $_POST['url_short'];
                $url_base = $_POST['url_base'];
                $url_date = date('d-m-y');

                $query = "INSERT INTO urls (url_long, url_short, url_base, url_date)";
                $query .= "VALUES ('{$url_long}', '{$url_short}','{$url_base}', now())";
            
                $create_post_query = mysqli_query($connection, $query);

                confirmQuery($create_post_query);
            }
            ?>

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
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label  class="sr-only">URL</label>
                    <input type="text" name="url_long" id="url" class="form-control" placeholder="Enter Your Long URL">
                </div>
                <div>
                    <label  class="sr-only">URL</label>
                    <input type="text" name="url_short" id="url" class="form-control" placeholder="Enter Your Short URL">
                </div>
                <div>
                    <label  class="sr-only">URL</label>
                    <input type="text" name="url_base" id="url" class="form-control" placeholder="Enter Your Base URL">
                </div>
                <input type="submit" name="send_url" value="Send" id="btn-login" class="btn btn-custom btn-lg btn-block">
            </form>
        </div>

        <hr>

<?php include "includes/footer.php"; ?>

