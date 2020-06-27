<?php

    include "config.php";

    $categoryid = $_GET['id'];

    $sql = "DELETE FROM category WHERE category_id = {$categoryid}";

    if(mysqli_query($con, $sql)){
        header("location: category.php");
    }else{
        echo "<p style='color:red; margin: 10px 0'>Can\'t Delete Category</p>";
    }

    mysqli_close($con);

?>