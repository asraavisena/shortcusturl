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
    // $url_short = $_POST['url_short'];
    // $url_base = $_POST['url_base'];
    $url_date = date('d-m-y');

    $query = "INSERT INTO urls (url_long, url_base, url_date)";
    $query .= "VALUES ('{$url_long}', '{$rand}', now())";

    $create_post_query = mysqli_query($connection, $query);

    confirmQuery($create_post_query);

    echo "<p class='bg-success'>Your short link is: <a href='$url_long'>localhost/s/$rand</a></p>";
    echo "SHort Link is: ";
}
?>
