
function calc()
{//declare variables
	var nocarc = document.getElementById("nocarc").value;//number of carcass
	var prTitle1 = document.getElementById("pname").value;//project name from the form
	var str = prTitle1.toLowerCase(); //change project name string to lower case
	var prTitle  = str.charAt(0).toUpperCase() + str.substring(1);//capitalise project name string
	var c_colour1 = (document.getElementById("c_colour").value).toLowerCase();//get carcass colour from the form and change string to lower case
	var c_colour = c_colour1.charAt(0).toUpperCase() + c_colour1.substring(1);//capitalise carcass colour string
	var table = "<table class='table' border='1'>";//variable to use as opening table tag
	
	
    document.getElementById('projform').innerHTML = "";//clear precious form div
	
	//prompt user to enter carcass sizes and number of shelves for the project
	document.getElementById('carcass_list_title').innerHTML += "<a>Now enter carcass details for your project " + prTitle+" </a></br>";
	
	
	

	//loop to create as many tables as carcasses with input fields
	for (i = 0; i < nocarc; i++) {
    document.getElementById('carcass_list').innerHTML +=table +"<tr><th>Carcass</br>number</th>&nbsp<th>Height</br>(mm)</th>&nbsp<th>Width</br>(mm)</th>&nbsp<th>Internal Depth</br>(mm)</th>&nbsp<th>Sides/Top/Shelves</br> Thickness</th>&nbsp<th>Back </br>Thickness</th>&nbsp<th>Number of</br>Shelves</th></tr><tr><td><input name='no"+(i+1)+"'"+" id='no'type='text' readonly size ='2' value = '"+(i+1)+"'"+"></input></td>&nbsp<td><input required name='height"+(i+1)+"'" +"id='height"+(i+1)+"'" +"type='text' size ='4' maxlength ='4'  placeholder = 'H'></input></td>&nbsp<td><input required name='width"+(i+1)+"'" +"id='width"+(i+1)+"'" +"type='text' size ='4' maxlength ='4'  placeholder = 'W'></input></td><td><input required name='depth"+(i+1)+"'" +"id='depth"+(i+1)+"'" +"type='text' size ='4' maxlength ='4'  placeholder = 'D'></input></td>&nbsp<td><input required name='thickness"+(i+1)+"'" +"id='thickness"+(i+1)+"'" +"type='number' min='12' max='24' step= '3'size ='2' maxlength ='2'  placeholder = 'mm' value='18'></input></td>&nbsp<td><input required name='back_thickness"+(i+1)+"'" +"id='back_thickness"+(i+1)+"'" +"type='number' size ='4' maxlength ='2' min='3' max='24' step= '3'placeholder = 'mm' value='6'></input></td>&nbsp<td><input required name='noShelves"+(i+1)+"'" +"id='noShelves"+(i+1)+"'" +"type='number' size ='2' maxlength ='2' min='0' max='12' placeholder = '0' value='0'></input><input readonly name = 'c_colour"+(i+1)+"'"+" type ='hidden' value = "+"'"+c_colour+ "'"+"></input></td>&nbsp</tr></table>";
	
   
	}
	
	document.getElementById('carcass_list').innerHTML += "<input readonly name = 'prTitle' type ='hidden' value = "+"'"+prTitle+ "'"+"></input>";

	//button to submit form
	document.getElementById('carcass_list').innerHTML += "<input type ='submit' value ='Save project'/>";
	
	
return false;
}

function conf(){
	

  if(confirm("Do you really want to delete this project? This can't be reverted"))
    document.forms[0].submit();
  else
    return false;
}
    
	
	
	

	
	
	
		
	
	


