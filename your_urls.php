<!-- Database -->
<?php include "includes/db.php";?>
<!-- Header -->
<?php include "includes/header.php";?>
<!-- Navigation -->
<?php include "includes/navigation.php";?>
<?php include "functions.php";?>

<table class="table table-bordered table-hover">
<thead>
        <tr>
            <th>Id</th>
            <th>Long Url</th>
            <th>Base Url</th>
            <th>Short Url</th>
            <th>Date</th>
            <th>Author</th>
            <th>View Count</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // PAGINATION
            $per_page = 10;
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                
            } else {
                $page ="";
            }

            if($page == "" || $page == 1){
                $page_1 = 0;
            } else {
                $page_1 = ($page * $per_page) - $per_page;
            }

            $url_query_count = "SELECT * FROM urls ";
            $find_count = mysqli_query($connection, $url_query_count);
            $count = mysqli_num_rows($find_count);
            $count = ceil($count / $per_page);

            if(isset($_SESSION['username'])){
                $the_username= $_SESSION['username'];
            
            $query_url = "SELECT * FROM urls WHERE url_author = '{$the_username}' ";
            $query_url .= "ORDER BY url_id DESC LIMIT $page_1, $per_page  ";
            $select_all_urls_query = mysqli_query($connection, $query_url);

            while($row = mysqli_fetch_assoc($select_all_urls_query)){
                $url_id = $row['url_id'];
                $url_long = $row['url_long'];
                $url_short = $row['url_short'];
                $url_base = $row['url_base'];
                $url_date = $row['url_date'];
                $url_author = $row['url_author'];
                $url_views_count = $row['url_views_count'];

                echo "<tr>";
                echo "<td>{$url_id}</td>";
                echo "<td>{$url_long}</td>";
                echo "<td>{$url_base}</td>";
                echo "<td><a href= '$url_short'>$url_short</a></td>";
                echo "<td>{$url_date}</td>";
                echo "<td>{$url_author}</td>";
                echo "<td>{$url_views_count}</td>";
                echo "</tr>";
            }}
        ?>
    </tbody>

    <!-- link for pagination -->
    <ul class="pager">
        <?php 
        for($i = 1; $i <= $count; $i++){
            
            if($i == $page){
                echo "<li><a class='active_link' href='your_urls.php?page={$i}'>{$i}</a></li>";
            } else {
                echo "<li><a href='your_urls.php?page={$i}'>{$i}</a></li>";
            }
        }
        ?>
    </ul>
</table>

<?php include "includes/footer.php"; ?>