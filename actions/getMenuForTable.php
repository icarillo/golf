<?php
$sql = "SELECT
    menu.id,
    foodType.strName AS Category,
    menu.strName AS Dish,
    menu.strDescription AS Description,
    menu.nPrice AS Price,
    foodType.strPicture AS Photo
        FROM 
    menu
        LEFT JOIN
    foodType ON menu.nFoodTypeID=foodType.id
        ORDER BY
    foodType.id ASC";
$arrMenuItems = Connection::runSQL("getAllData", $sql);
?>