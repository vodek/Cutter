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






		 

function calc()
{//declare variables


	var nocarc = document.getElementById("nocarc").value;//number of carcass
	var prTitle1 = document.getElementById("pname").value;//project name from the form
	var str = prTitle1.toLowerCase(); //change project name string to lower case
	var prTitle  = str.charAt(0).toUpperCase() + str.substring(1);//capitalise project name string
	var c_colour1 = (document.getElementById("c_colour").value).toLowerCase();//get carcass colour from the form and change string to lower case
	var c_colour = c_colour1.charAt(0).toUpperCase() + c_colour1.substring(1);//capitalise carcass colour string
	var table = "<table class='table' border='1'>";//variable to use as opening table tag
	var height_yes = document.getElementById("height_yes");
	var width_yes = document.getElementById("width_yes");
	var depth_yes = document.getElementById("depth_yes");
	var thickness = (document.getElementById("thickness").value);
	var back_thickness = (document.getElementById("back_thickness").value);
	
	
	
	if(height_yes.checked){
		var height = document.getElementById('height').value;
		if(isNaN(height)==true){
			
			alert('Height needs to be number');
			return false;
			
		}
		if((height <200)||(height>3000) ){
			alert('Height needs to be between 200 and 3000mm');
			return false;
			



		}
		else{
			height = parseInt(document.getElementById('height').value);
		}
		
		
	
	}
		if(width_yes.checked){
		var width = document.getElementById('width').value;
		if(isNaN(width)==true){
			
			alert('Width needs to be number');
			return false;
			
		}
		if((width <100)||(width>1400) ){
			alert('Width needs to be between 100 and 1400mm');
			return false;
			



		}
		else{
			width = parseInt(document.getElementById('width').value);
		}
		
		
	
	}
	
	
if(depth_yes.checked){
		var depth = document.getElementById('depth').value;
		if(isNaN(depth)==true){
			
			alert('Depth needs to be number');
			return false;
			
		}
		if((depth <100)||(depth>800) ){
			alert('Depth needs to be between 100 and 800mm');
			return false;
			



		}
		else{
			depth = parseInt(document.getElementById('depth').value);
			
		}
		
	
	}
	
	
	
	
	
	
	if(!height_yes.checked){
	height = "";
	}
	
	if(!width_yes.checked){
	width = "";
	}
	
	if(!depth_yes.checked){
	depth = "";
	
	}

	
    document.getElementById('projform').innerHTML = "";//clear previous form div
	
	//prompt user to enter carcass sizes and number of shelves for the project
	document.getElementById('carcass_list_title').innerHTML += "<a>Now enter/review carcass details for your project " + prTitle+" </a></br>";
	
		//document.getElementById('carcass_list').innerHTML += "DUPA";
		
		
		 
		 
		 
   for (i = 0; i < nocarc; i++) {
    document.getElementById('carcass_list').innerHTML += table +"<tr><th>Carcass</br>number</th>&nbsp<th>Height</br>(mm)</th>&nbsp<th>Width</br>(mm)</th>&nbsp<th>Internal Depth</br>(mm)</th>&nbsp<th>Sides/Top/Shelves</br> Thickness</th>&nbsp<th>Back </br>Thickness</th>&nbsp<th>Number of</br>Shelves</th></tr><tr><td><input name='no"+(i+1)+"'"+" id='no' type='text' readonly size ='2' value = '"+(i+1)+"'"+"></input></td>&nbsp<td><input required name='height"+(i+1)+"'" +"id='height"+(i+1)+"'" +"type='number'  min='200' max='3000'  value ='"+height+"'></input></td>&nbsp<td><input required name='width"+(i+1)+"'" +"id='width"+(i+1)+"'" +"type='number'  min='100' max='1400' size ='4' value ='"+width+"'></input></td><td><input required name='depth"+(i+1)+"'" +"id='depth"+(i+1)+"'" +"type='number'  min='100' max='800' value ='"+depth+"'></input></td>&nbsp<td><input required readonly name='thickness"+(i+1)+"'" +"id='thickness"+(i+1)+"'" +"type='text'  value='"+thickness+"'></input></td>&nbsp<td><input required name='back_thickness"+(i+1)+"'" +"id='back_thickness"+(i+1)+"'" +"type='text' readonly size ='2'  value='"+back_thickness+"'></input></td>&nbsp<td><input required name='noShelves"+(i+1)+"'" +"id='noShelves"+(i+1)+"'" +"type='number' size ='2' maxlength ='2' min='0' max='12' placeholder = '0' value='0'></input><input readonly name = 'c_colour"+(i+1)+"'"+" type ='hidden' value = "+"'"+c_colour+ "'"+"></input></td>&nbsp</tr></table></br>";
	
		 }
		 document.getElementById('carcass_list').innerHTML += "<input readonly name = 'prTitle' type ='hidden' value = "+"'"+prTitle+ "'"+"></input>";

	//button to submit form
	document.getElementById('carcass_list').innerHTML += "<input type ='submit' value ='Save project'/>";
		 
	return false;

		
}



	 






function conf(){
	

  if(confirm("Do you really want to delete this project? This can't be reverted")){
  document.forms[0].submit();}
  else{
  return false;}
}
    
	
	
	

	
	
	
		
	
	


