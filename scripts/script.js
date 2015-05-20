	function h(){
		var height_yes = document.getElementById("height_yes");	 
		
		
		if (height_yes.checked){
			 
		 document.getElementById('height_all').innerHTML = "<label>Enter height:<input required name='height' id='height' type='text' size ='4' maxlength ='4'/></label>";	 

		 
	return false; 
		}


else{
document.getElementById('height_all').innerHTML = "";	
	
}	
			 
		 }

	function w(){
		var width_yes = document.getElementById("width_yes");	 
		
		if (width_yes.checked){
			 
		 document.getElementById('width_all').innerHTML = "<label>Enter width:<input required name='width' id='width' type='text' size ='4' maxlength ='4'/></label>";	 

		 
	return false; 
		}


else{
document.getElementById('width_all').innerHTML = "";	
	
}	
			 
}
		 
		 function d(){
		var depth_yes = document.getElementById("depth_yes");	 
		
		if (depth_yes.checked){
			 
		 document.getElementById('depth_all').innerHTML = "<label>Enter depth:<input required name='depth' id='depth' type='text' size ='4' maxlength ='4'/></label>";	 

		  
	return false; 
		}


else{
	
document.getElementById('depth_all').innerHTML = "";	
	
}	
			 
}


//document.getElementById('cutlist').innerHTML +="<a>To sa ilosci pólek, które przechwycilem, bitch:</a></br>";
	//document.getElementById('cutlist').innerHTML +="<a>"+ilosc.length+"</a>";


function conf(){
	

  if(confirm("Do you really want to delete this project? This can't be reverted")){
  document.forms[0].submit();}
  else{
  return false;}
}
    
	
function cutlist(){
	document.getElementById('cutlist1').innerHTML ="";
	var ilosc = document.getElementsByName("carcassid");
	var counter = ilosc.length;
	var sidescanv = document.getElementById("sides").value;
	var backscanv = document.getElementById("backs").value;
	sidescanv_h = "";
	sidescanv_w = "";
	backscanv_h = "";
	backscanv_w = "";
	
	if(sidescanv == '2440x1220'){
	sidescanv_h = 2440/2;
	sidescanv_w = 1220/2;
	}
	else if(sidescanv == '3050x1220'){
	sidescanv_h = 3050/2;
	sidescanv_w = 1220/2;
	}
	else if(sidescanv == '2800x2100'){
	sidescanv_h = 2800/2;
	sidescanv_w = 2100/2;
	}
	if(backscanv == '2440x1220'){
	backscanv_h = 2440/2;
	backscanv_w = 1220/2;
	}
	else if(backscanv == '3050x1220'){
	backscanv_h = 3050/2;
	backscanv_w = 1220/2;
	}
	else if(backscanv == '2800x2100'){
	backscanv_h = 2800/2;
	backscanv_w = 2100/2;
	}
	
	var canvas_s = " <canvas  width="+"'"+sidescanv_w+"'"+" height="+"'"+sidescanv_h+"'"+" style='border:2px solid #000000;'></canvas> ";
	
	var canvas_b = " <canvas width="+"'"+backscanv_w+"'"+" height="+"'"+backscanv_h+"'"+" style='border:2px solid #000000;'></canvas> ";
	
	kerf = document.getElementById("kerf").value;
	

	document.getElementById('cutlist1').innerHTML += "</br>"+canvas_s;
	document.getElementById('cutlist1').innerHTML += "</br>"+canvas_b;
	
		
	
	for (var i = 0; i < counter; i++){
		var carcassid = document.getElementById("carcassid." +i).value;
		var qty_s = document.getElementById("qty_s." +i).value;
		var side_h = document.getElementById("side_h." +i).value;
		var side_w = document.getElementById("side_w." +i).value;
		var side_t = document.getElementById("side_t." +i).value;
		var qty_t = document.getElementById("qty_t." +i).value;
		var t_h = document.getElementById("t_h." +i).value;
		var t_w = document.getElementById("t_w." +i).value;
		var t_t = document.getElementById("t_t." +i).value;
		var qty_b = document.getElementById("qty_b." +i).value;
		var b_h = document.getElementById("b_h." +i).value;
		var b_w = document.getElementById("b_w." +i).value;
		var b_t = document.getElementById("b_t." +i).value;
		var qty_sh = document.getElementById("qty_sh." +i).value;
		var sh_h = document.getElementById("sh_h." +i).value;
		var sh_w = document.getElementById("sh_w." +i).value;
		var sh_t = document.getElementById("sh_t." +i).value;
		
		
		for(var j=0; j<qty_s; j++){
			
			 side = [carcassid, qty_s, side_h, side_w, side_t];
			 
		}
		var l=0;
/* 		do{
			top = [carcassid, qty_t, t_h, t_w, t_t];
			l++;	
		}
		while(l < qty_t); */
		
		for(var j=0; j<qty_t; j++){
			bottom = [carcassid, qty_t, t_h, t_w, t_t];
	
		}
		for(var j=0; j<qty_b; j++){
			back = [carcassid, qty_b, b_h, b_w, b_t];
	
		}
			//do while loop, to avoid 0 shelves problem
			var k = 0;
		
			do{
				shelf=[carcassid, qty_sh, sh_h, sh_w, sh_t];
				
				k++;
			}
			
			while(k < qty_sh);
		
		    var p =0;
			do{
				carcass_s = [side, bottom, shelf];
				carcass_b = [back];
				
			
	
				
				p++;
			}
			while(p < counter);	
				
				//document.getElementById('cutlist1').innerHTML +="<a>"+carcass_s[0]+","+carcass_s[1]+","+carcass_s[2]+","+carcass_b[0]+"</a></br>";
				
				var W = parseInt(carcass_s[0][3]);
				var H = parseInt(carcass_s[0][2]);
				
			
				
				//document.getElementById('cutlist1').innerHTML += H;
				c = canvas_s;
				ctx = c.getContext("2d");
				
				ctx.fillStyle = "#FF0000";

				ctx.fillRect(0,0,W,H);
				
		
		}
		
		//document.getElementById('cutlist1').innerHTML = "<a>"+sidescanv_h+", "+ sidescanv_w+", "+ backscanv_h+", "+backscanv_w +"</a>";
			
	
	//document.getElementById('cutlist1').innerHTML += canvas_s;

   
	//document.getElementById('cutlist1').innerHTML +="<a>"+carcass_s[0]+","+carcass_s[1]+","+carcass_s[2]+","+carcass_b[0]+"</a></br>";
			
				  
	
	
	


	

return false;
}	
	

	
	
	
		
	
	


