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
    
