<?php
include("actions/getMainContent.php");
include("templates/singleColumnArticle.php");
include("actions/getMenuItems.php");
?>
<section id="menuSection" class="container">

<?php
$menu = '';
$itemType = '';
foreach($arrMenuItems as $item){
    if($itemType != $item['strType']){
        $menu == ''?$menu = $menu:$menu .= "
</div>";
        $itemType = $item['strType'];
        $menu .= "
<div class='menuCategory'>
    <h2 class='menuCategoryTitle'>".$itemType."</h2>";
    }
    $menu .= "
    <div class='menuItemInfo'>
        <p class='itemName'>".$item['strName']."</p>
        <p class='itemDescription'>".$item['strDescription']."</p>
        <p class='itemPrice'>".$item['nPrice']."</p>
    </div>";
}
$menu .= "
</div>";
echo $menu;
?>

</section>