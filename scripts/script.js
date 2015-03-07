
function calc()
{
	var nocarc = document.getElementById("nocarc").value;
	var prTitle1 = document.getElementById("pname").value;
	var str = prTitle1.toLowerCase(); 
	var prTitle  = str.charAt(0).toUpperCase() + str.substring(1);
	var c_colour1 = (document.getElementById("c_colour").value).toLowerCase();
	var c_colour = c_colour1.charAt(0).toUpperCase() + c_colour1.substring(1);
	var table = "<table class='table' border='1'>";
	
	
    document.getElementById('projform').innerHTML = "";
	document.getElementById('carcass_list_title').innerHTML += "<a>Now enter carcass details for your project " + prTitle+" </a></br>";
	document.getElementById('carcass_list').innerHTML += "<input readonly type ='hidden' value = "+"'"+prTitle+ "'"+"></input>";
	document.getElementById('carcass_list').innerHTML += "<input readonly type ='hidden' value = "+"'"+c_colour+ "'"+"></input>";
	
	/* document.getElementById('carcass_list').innerHTML += table +"<tr><th>Number</th>&nbsp<th>Height</br>(mm)</th>&nbsp<th>Width</br>(mm)</th>&nbsp<th>Internal Depth</br>(mm)</th>&nbsp<th>Sides/Top/Shelves</br> Thickness</th>&nbsp<th>Back </br>Thickness</th>&nbsp<th>Number of</br>Shelves</th></tr></br>\n"; */
	
	for (i = 0; i < nocarc; i++) {
    document.getElementById('carcass_list').innerHTML +=table +"<tr><th>Carcass</br>number</th>&nbsp<th>Height</br>(mm)</th>&nbsp<th>Width</br>(mm)</th>&nbsp<th>Internal Depth</br>(mm)</th>&nbsp<th>Sides/Top/Shelves</br> Thickness</th>&nbsp<th>Back </br>Thickness</th>&nbsp<th>Number of</br>Shelves</th></tr></br>\n<tr><td><input name='no' id='no'type='text' readonly size ='2' value = '"+(i+1)+"'"+"></input></td>&nbsp<td><input name='height"+(i+1)+"'" +"id='height"+(i+1)+"'" +"type='text' size ='4' maxlength ='4'  placeholder = 'H'></input></td>&nbsp<td><input name='width"+(i+1)+"'" +"id='width"+(i+1)+"'" +"type='text' size ='4' maxlength ='4'  placeholder = 'W'></input></td><td><input name='depth"+(i+1)+"'" +"id='depth"+(i+1)+"'" +"type='text' size ='4' maxlength ='4'  placeholder = 'D'></input></td>&nbsp<td><input name='1thickness"+(i+1)+"'" +"id='1thickness"+(i+1)+"'" +"type='number' min='12' max='24' step= '3'size ='2' maxlength ='2'  placeholder = 'mm'></input></td>&nbsp<td><input name='2thickness"+(i+1)+"'" +"id='2thickness"+(i+1)+"'" +"type='number' size ='4' maxlength ='2' min='3' max='24' step= '3'placeholder = 'mm'></input></td>&nbsp<td><input name='noShelves"+(i+1)+"'" +"id='noShelves"+(i+1)+"'" +"type='number' size ='2' maxlength ='2' min='0' max='12' placeholder = '0'></input></td>&nbsp</tr></table>";
   
	}
	//document.getElementById('carcass_list').innerHTML +="</table>";
	document.getElementById('carcass_list').innerHTML += "<input type ='submit' value ='Submit'/>";
	
	
return false;
}