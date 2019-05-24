<?php
include("actions/getPagesForNav.php");
$arrSubPages = [];
$childrenPages = "<ul>";

foreach($arrPages as $page){
    if($page['bMainPage']==0){
        array_push($arrSubPages,$page);
    }
}

?>
<nav>
    <ul>
<?php
	foreach($arrPages as $page)
	{
		
		$activeState = ($page['id'] == $pageID)?"active":"";
		if($page['id'] == $pageID){
			$pageName = $page['strName'];
		}
        if($page['bMainPage']==1){
?>
            <li>
                <a href="index.php?id=<?=$page['id']?>" class="<?=$activeState?>"><?=$page['strName']?></a>
<?php
                $childrenPages = "<ul class='dropDown'>";
                foreach($arrSubPages as $subPages){
                    if($subPages['strParentPage']==$page['strName']){
                      $activeState = ($subPages['id'] == $pageID)?"active":"";
                      $childrenPages.= "<li>
                        <a href='index.php?id=".$subPages['id']."' class='".$activeState."'>".$subPages['strName']."</a>
                    </li>";
                    }
                }
                $childrenPages .= "</ul>";
                if($childrenPages!= "<ul class='dropDown'></ul>"){
                    echo $childrenPages;
                }
?>
            </li>
<?php
        }
	}
?>
    </ul>
</nav>
