$(function(){
    $("#topBtn").click(function(){
		
		var nav_z = $("#showDiv");
		if(nav_z.css("display")== "block"){
			nav_z.hide();
		}else{
			nav_z.show();
		}	
	});
	$("#showLeft").click(function(){
		var btFrame = window.parent.document.getElementById("btFrame");
		
		var nav_z = $("#leftCont");
		if(nav_z.css("display")== "block"){
			nav_z.hide();
			btFrame.cols="15,*";
		}else{
			nav_z.show();
			btFrame.cols="235,*";
		}	
	});
});