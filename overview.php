<!-- Show URL into Table -->

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Long Url</th>
            <th>Base Url</th>
            <th>Short Url</th>
            <th>Date</th>
            <th>View Count</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $query_url = "SELECT * FROM urls";
            $select_all_urls_query = mysqli_query($connection, $query_url);

            while($row = mysqli_fetch_assoc($select_all_urls_query)){
                $url_id = $row['url_id'];
                $url_long = $row['url_long'];
                $url_short = $row['url_short'];
                $url_base = $row['url_base'];
                $url_date = $row['url_date'];
                $url_views_count = $row['url_views_count'];

                echo "<tr>";
                echo "<td>{$url_id}</td>";
                echo "<td>{$url_long}</td>";
                echo "<td>{$url_base}</td>";
                echo "<td><a href= '$url_short'>$url_short</a></td>";
                echo "<td>{$url_date}</td>";
                echo "<td>{$url_views_count}</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

<ul>

</ul>