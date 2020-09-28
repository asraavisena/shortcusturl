

<form action="" method="post" enctype="multipart/form-data">
    <div>
        <label  class="sr-only">URL</label>
        <input type="text" name="url_long" id="url" class="form-control" placeholder="Enter Your Long URL">
    </div>

    <input type="submit" name="send_url" value="Send" id="btn-login" class="btn btn-custom btn-lg btn-block">
</form>

<!-- POST URL -->
<?php 
if(isset($_POST['send_url'])){
    $rand= substr(md5(microtime()), rand(0,26),5);
    
    $url_long = $_POST['url_long'];
    $url_date = date('d-m-y');
    $url_short = '/shortCusturl/s/' . $rand;

    $query = "INSERT INTO urls (url_long, url_base, url_date, url_short) ";
    $query .= "VALUES ('{$url_long}', '{$rand}', now(), '{$url_short}') ";

    $create_post_query = mysqli_query($connection, $query);

    confirmQuery($create_post_query);

    $query_url = "SELECT * FROM urls";
    $select_all_urls_query = mysqli_query($connection, $query_url);
    while($row = mysqli_fetch_assoc($select_all_urls_query)){
        $url_long = $row['url_long'];
        $url_base = $row['url_base'];
    }

    echo "<p class='bg-success'>Your short link is: <a href='index.php?url_base=$url_base'>index.php?url_base=$url_base</a></p>";
}
?>
