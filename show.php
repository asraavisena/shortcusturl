<!-- Show URL into Table -->
<?php 
    $query_url = "SELECT * FROM urls";
    $select_all_urls_query = mysqli_query($connection, $query_url);
    while($row = mysqli_fetch_assoc($select_all_urls_query)){
        $url_long = $row['url_long'];
    }
?>
<ul>
    <li><?php echo $url_long?></li>
    <li></li>
</ul>