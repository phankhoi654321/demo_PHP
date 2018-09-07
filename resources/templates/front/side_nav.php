
<p class="lead">Shop Name</p>
<div class="list-group">
    <?php 
        $query = "SELECT * FROM categories";
        $result = mysqli_query($connection, $query);
        //echo $result; error cann't convert to string.

        if(!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        }

        while($row = mysqli_fetch_array($result)) {
            echo "<a href='' class='list-group-item'>{$row['cat_title']}</a>";
        }
        

        mysqli_close($connection);
    ?>

</div>