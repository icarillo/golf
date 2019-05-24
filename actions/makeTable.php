<?php


//----------READ ME
//DO NOT FORGET TO SET A $deleteTable (name of the table where records will be deleted from ),
//THE $arrProtectedIDS (ids that will not have the Delete options) by default thi s array is blank it menas that all elements will have a delete button
//AND $returnPage (page that wills return data after your delete) IN YOUR MAIN PAGE, BEFORE INCLUDING THIS FILE THERE....

$arrProtectedIDS = (isset($arrProtectedIDS)?$arrProtectedIDS:[]);
$arrData = Connection::runSQL("getAllData", $sql);
$tableRow="";
$tableHeaderRow="";
$arrData = (isset($arrData))?$arrData:false;

if($arrData != false){
    foreach($arrData as $arrDataDetails)
    {	
        $tableHeaderCells="";
        $tableRow .= "<div class='tableRow'>";
        foreach ($arrDataDetails as $dbColumnNames => $dbColumnValues){
            $tableHeaderCells .= "<div class='tableCell'>".$dbColumnNames."</div>";
            $tableRow .= "<div class='tableCell'>".$dbColumnValues."</div>";
        }

        $tableHeaderRow = "<div class='tableRow tableHeader'>".$tableHeaderCells."<div class='tableCell'>Edit</div><div class='tableCell'>Delete</div></div>";

        $tableRow .= 
                "<div class='tableCell'>
					<a href='#' class='editBtn' data-idtoedit='".$arrDataDetails['id']."'><i class='far fa-edit'></i>Edit</a>
				</div>";
		if(!in_array($arrDataDetails['id'], $arrProtectedIDS)){
			$tableRow .="<div class='tableCell'>
                    <a class='deleteBtn' data-deletetable='".$deleteTable."' data-pagetoreturn='".$returnPage."' href='#' value='".$arrDataDetails['id']."'><span class='fas fa-trash-alt'></span> Delete</a>
                </div>
            </div>";
		}

    }

    echo $tableHeaderRow;
    echo $tableRow;
} 
else{
    echo "<h2>No Contacts saved.</h2>";
}

?>