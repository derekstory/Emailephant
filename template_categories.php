<?php
include 'connect.php';

    $loadCategory = mysql_query("SELECT * FROM `category` WHERE category_client = 'USAA'");

    while($category = mysql_fetch_array($loadCategory))
    {
    $categoryTitle = $category["category_name"];
    echo '<option>' . $categoryTitle . '</option>';
    }
?>