<!-- Database -->
<?php include "includes/db.php";?>
<!-- Header -->
<?php include "includes/header.php";?>
<!-- Navigation -->
<?php include "includes/navigation.php";?>

<?php include "functions.php";?>

<!-- EDIT URL -->
<?php 
if(isset($_GET['url_id'])){
    $the_url_id = $_GET['url_id'];
}

$query_edit = "SELECT * FROM urls WHERE url_id = '{$the_url_id}' ";
$edit_url_query_by_id = mysqli_query($connection, $query_edit);
while($row = mysqli_fetch_assoc($edit_url_query_by_id)){
    $url_long = $row['url_long'];
    $url_base = $row['url_base'];
}

if(isset($_POST['update_url'])){
    $rand= substr(md5(microtime()), rand(0,26),5);
    $url_long = $_POST['url_long'];
    $url_date = date('d-m-y');
    $url_short = '/shortCusturl/s/' . $rand;

    if(isset($_SESSION['username'])){
        $url_author = $_SESSION['username'];

        $query = "UPDATE urls SET ";
        $query .= "url_long = '{$url_long}', ";
        $query .= "url_base = '{$rand}', ";
        $query .= "url_short = '{$url_short}', ";
        $query .= "url_date = now() ";
        $query .= "WHERE url_id = '{$the_url_id}' ";
        $update_url_query = mysqli_query($connection, $query);

        confirmQuery($update_url_query);
    }

  

    // $query_url = "SELECT * FROM urls";
    // $select_all_urls_query = mysqli_query($connection, $query_url);
    // while($row = mysqli_fetch_assoc($select_all_urls_query)){
    //     $url_long = $row['url_long'];
    //     $url_base = $row['url_base'];
    // }

    // echo "<p class='bg-success'>Your short link is: <a href='index.php?url_base=$url_base'>index.php?url_base=$url_base</a></p>";
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div>
        <label  class="sr-only">URL</label>
        <input value= "<?php echo $url_long?>"type="text" name="url_long" id="url" class="form-control" placeholder="Enter Your Long URL">
    </div>

    <input type="submit" name="update_url" value="Save" id="btn-login" class="btn btn-custom btn-lg btn-block">
</form>

<?php include "includes/footer.php";?>