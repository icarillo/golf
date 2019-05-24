$(function(){
   $("#createUserBtn").on("click", function(){
       $.ajax({
           url: "../actions/saveUser.php",
           method: "post",
           data: {
               strName: $("#strName").val(),
               strpassword: $("#strpassword").val()
           },
           success: function(result){
               $(".myContent").html(result);
           },
           error: function(){
               console.log("error");
           }          
       });
       console.log("hi");
       return false;
   });
});