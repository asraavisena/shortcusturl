<?php
    function confirmQuery($result){
        global $connection;
        if(!$result){
            die("QUERY FAILED" . mysqli_error($connection));
        }
    }

    function deleteURL(){
        global $connection;
        if(isset($_GET['delete'])) {
            $the_url_id = $_GET['delete'];
            $query = "DELETE FROM urls WHERE url_id = {$the_url_id}";
            $delete_query = mysqli_query($connection, $query);
            header("Location: your_urls.php");
        }
}
?>