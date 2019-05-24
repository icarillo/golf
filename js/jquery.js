$(function(){
	var articleWrap = $(".articleImg .artcImgWrap");
	
	$(".staffContainer .picturesWrap img").css("opacity", 0);
	var staffWrap = $(".staffContainer .picturesWrap");
	$.each(staffWrap, function(i, wrap){
		var wrapImage = wrap.children[0].children[0].src;
		wrap.style.backgroundImage = "url('"+wrapImage+"')";
	});
    $(".picturesWrap img").css("opacity", 0);
	var staffWrap = $(".picturesWrap");
	$.each(staffWrap, function(i, wrap){
		var wrapImage = wrap.children[0].children[0].src;
		wrap.style.backgroundImage = "url('"+wrapImage+"')";
	});
    $(".card").each(function(){
		$(this).find("img").css("opacity", "0");
		var cardSrc = $(this).find("img").attr("src");
		$(this).css("backgroundImage", "url("+cardSrc+")");
    });	
	var path="";
	if($("#restrictArea")[0]){
		path = "../";
	}
	$("#saveContact").on("click", function(){
		$.ajax({
			url: (path+"actions/saveContacts.php"),
			method: "POST",
			data:{
				strName:$("#strName").val(),
				strEmailAddress:$("#strEmailAddress").val(),
				nPhoneNumber: $("#nPhoneNumber").val()
			},
			success: function(submition){
				if(submition!=false){
					$("#successBox").show();
					$("#errorBox").hide();
					$("#successDelete").hide();
                	$("form")[0].reset();
					if($("#restrictArea")[0]){
						$(".myContent").html(submition);
						createDeleteBtn();
					}
				}
				else if(submition==false){
					$("#successBox").hide();
					$("#errorBox").show();
					$("#successDelete").hide();
				}
			},
			error: function(){
				
			}
		});
		return false;
	});
	$("#createUserBtn").on("click", function(){
		$.ajax({
			url: (path+"actions/saveUser.php"),
			method: "POST",
			data:{
				strName:$("#strName").val(),
				strpassword:$("#strpassword").val()
			},
			success: function(submition){
				if(submition!=false){
					$("#successBox").show();
					$("#errorBox").hide();
					$("#successDelete").hide();
                	$("form")[0].reset();
					if($("#restrictArea")[0]){
						$(".myContent").html(submition);
						createDeleteBtn();
					}
				}
				else if(submition==false){
					$("#successBox").hide();
					$("#errorBox").show();
					$("#successDelete").hide();
				}
			},
			error: function(){
				
			}
		});
		return false;
	});
	var editFields =$(".editFields");
	for(var i=0; i<editFields.length;i++){
		if(!editFields[i].value){
			editFields[i].style.display = "none";
		}
	}
	$("#updatePage").on("click", function(){
		var nPageID=$("#strName").data("npageid");
		console.log("updatePage.php?id='"+nPageID+"'");
		$.ajax({
			url: "updatePage.php?nPageID="+nPageID,
			method: "POST",
			data:{
				strName: $("#strName").val(),
				nTemplatesID: $("#nTemplatesID").val(),
				strMainHeading: $("#strMainHeading").val(),
				strMainContent: $("#strMainContent").val(),
				strSecondaryHeading: $("#strSecondaryHeading").val(),
				strSecondaryContent: $("#strSecondaryContent").val()			
			},
			success: function(result){
				console.log(result);
				$("body").html("chuchecho");						
			}
		});
		return false;
	});
	createDeleteBtn();
    function createDeleteBtn(){
		var returnPage = $(".deleteBtn").data("pagetoreturn");
		var deleteTable = $(".deleteBtn").data("deletetable");
		$(".deleteBtn").on("click", function(){
			$(".myContent").html("<img src='images/loading.gif'/>");
			$.ajax({
				url: "../actions/delete.php",
				method: "POST",
				data:{
					id: this.attributes.value.nodeValue,
					tableName: deleteTable,
					returnPage: returnPage
				},
				success: function(result){
					$(".myContent").html(result);
					$("#errorBox").hide();
					$("#successBox").hide();
					$("#successDelete").show();
					createDeleteBtn();
				}
			});
			return false;
		});
    }
	$("#addMoreImg").on("click", function(){
		$("#imagesInputs").append("<label>Alt name:</label><input type='text' name='strName[]'><input type='file' name='strFileName[]'/>");
		return false;
	});
});