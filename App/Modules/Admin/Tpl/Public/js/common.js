$(function(){
	var checkbox = $(".checkThis");
	var len = checkbox .length;
	$("#checkAll,#checkAll01").click(function(){
		checkbox.attr("checked",this.checked)
	});	
    
    $("#search01,#search02").click(function(){
		
		var nav_z = $("#search");
		if(nav_z.css("display")== "block"){
			nav_z.hide();
		}else{
			nav_z.show();
		}	
	});
    
    
    
});

function TableColor(o,a,b,c,d){
    	var t1=document.getElementById(o).getElementsByTagName("tr");
        var t=[];
        for(var j=0;j<t1.length;j++){
            if(t1[j].className!="tablecolortr"){
                t.push(t1[j]);
            }
        }
    	var input = document.getElementById(o).getElementsByTagName("input");
    	
    	for(var i=0;i<t.length;i++){
    	    t[i].x = false;
    		t[i].style.backgroundColor=(t[i].sectionRowIndex%2==0)?a:b;
    		t[i].onclick=function(){
    
    		    var checked = this.getElementsByTagName("td")[0].getElementsByTagName("input")[0];
    			if(!this.x){
    			     checked.checked = true;
    			     this.style.backgroundColor=d;
    			     this.x=true;
    			}else{
    				
    					checked.checked = false;
    					this.style.backgroundColor=(this.sectionRowIndex%2==0)?a:b;
                        this.x=false;
    	
    			}
    		}
    		
    		t[i].onmouseover=function(){
    			if(!this.x)this.style.backgroundColor=c;
    		}
    		t[i].onmouseout=function(){
    			if(!this.x)this.style.backgroundColor=(this.sectionRowIndex%2==0)?a:b;
    		}
    	}
    }