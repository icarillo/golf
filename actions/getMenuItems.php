<?php
$sql = "SELECT
    menu.id,
    foodType.strName AS strType,
    menu.strName,
    menu.strDescription,
    menu.nPrice,
    foodType.strPicture
        FROM 
    menu
        LEFT JOIN
    foodType ON menu.nFoodTypeID=foodType.id
        ORDER BY
    foodType.id ASC";
$arrMenuItems = Connection::runSQL("getAllData", $sql);
?>