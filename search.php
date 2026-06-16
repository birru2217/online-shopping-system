<?php
include "header.php";
include "db.php";

if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];

    echo "<div class='container'>";
    echo "<h2>Search Result</h2><hr>";

    $sql = "SELECT * FROM products WHERE product_title LIKE '%$keyword%'";
    $query = mysqli_query($con,$sql);

    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            echo "<div class='card' style='padding:15px;margin-bottom:10px'>";
            echo "<h4>".$row['product_title']."</h4>";
            echo "<p>Price: ".$row['product_price']."</p>";
            echo "</div>";
        }
    } else {
        echo "<h3>No results found</h3>";
    }

    echo "</div>";
}

include "footer.php";
?>