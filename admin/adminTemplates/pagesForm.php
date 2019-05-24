<?php

$newPage = true;
$arrPageDetails = '';

//creating a var to use in include above
include('../actions/getPagesForForm.php');

           
//Here we rename the columns to use in the form as a nive name.... thinking about UX ;D
$arrColumnsNames = array(
		'id' => 'id',
		'strName' => 'Page name',
		'nTemplatesID' => 'Template',
		'bMainPage' => 'Main Page',
		'strParentPage' => 'Parent page name',
		'strMainHeading' => 'Main heading',
		'strMainContent' => 'Main content',
		'strMainImageFile' => 'Main image',
		'strMainImageName' => 'Main image name',
		'strMainBtnName' => 'Main CTA button name',
		'strMainTargetPath' => 'Main CTA button target',
		'strSecondaryHeading' => 'Secondary heading',
		'strSecondaryContent' => 'Secondary content',
		'strSecondaryImageFile' => 'Secondary image',
		'strSecondaryImageName' => 'Secondary image name',
		'strSecondaryBtnName' => 'Secondary CTA button name',
		'strSecondaryTargetPath' => 'Secondary CTA button target',
		'strPictureStrip1' => 'First photo for strip',
		'strPictureStrip2' => 'Second photo for strip',
		'strPictureStrip3' => 'Third photo for strip'
);

// here we define wich type of field will be crated for each column
$arrInputText = [
	'Page name', 
	'Parent page name', 
	'Main heading', 
	'Main image name',
	'Main CTA button name',
	'Main CTA button target', 
	'Secondary heading',
	'Secondary image name',
	'Secondary CTA button name',
	'Secondary CTA button target'	
];

$arrInpuCheckBox = [
	'Main Page'
];

$arrSelect = [
	'Template'
];

$arrFile = [
	'Main image',
	'Secondary image',
	'First photo for strip',
	'Second photo for strip',
	'Third photo for strip'
];

$arrTextArea = [
    'Main content',
    'Secondary content'
];
//Here we start to build our form creating a field FOREACH column in the table
?>

<form id="pagesForm" method="POST" action="actions/savePage.php" onSubmit="return validate()"><!-- open the form -->

<?php
foreach($arrPageDetails as $columnName=>$value){
	
	//creaatin a input type text for every 
	if((in_array($arrColumnsNames[$columnName], $arrInputText)) && (!empty($value) || $newPage)){
?>
		<lable><?=$arrColumnsNames[$columnName]?>:</lable>
		<input  id='<?=$columnName?>' name='<?=$columnName?>' type="text" value="<?=$value?>"/>
<?php
	}

	//creating a select box for templates
	else if((in_array($arrColumnsNames[$columnName], $arrSelect)) && (!empty($value) || $newPage)){		
?>
		<select id='<?=$columnName?>' name='<?=$columnName?>'>
<?php
		$sql = "SELECT id, strName FROM templates";
		$arrTemplates = Connection::runSQL("getAllData", $sql);
		foreach($arrTemplates as $templateDetails){
			$selected = ($value == $templateDetails['id'])?'selected':'';
?>
			<option value='<?=$templateDetails['id']?>' <?=$selected?>><?=$templateDetails['strName']?></option>
<?php 
		}
?>
		</select>	
<?php
	}
	
	//creating a checkbox for booleam main page
	else if((in_array($arrColumnsNames[$columnName], $arrInpuCheckBox)) && (!empty($value) || $newPage)){
		$bChecked = ($value != 1)?'':'checked';
?>
		<input  id='<?=$columnName?>' name='<?=$columnName?>' type="checkbox" value="1" <?=$bChecked?> /><?=$arrColumnsNames[$columnName]?>
<?php
	}
	else if((in_array($arrColumnsNames[$columnName], $arrFile)) && (!empty($value) || $newPage)){
?>
	<input id='<?=$columnName?>' type="file" name='<?=$columnName?>' value='<?=$value?>'>
	<div class='coverBg pageFormImages' >
		<img width='200' src="../assets/<?=$value?>" alt="default">
	</div>
<?php
	}
}
?>
</form>