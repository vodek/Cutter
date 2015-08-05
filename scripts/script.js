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

//*******************************************************************************************
//function to add sizes to array(method)

function Shape(nazwa, car, w, h, area) {
	this.nazwa = nazwa;
	this.car = car;

    this.w = w;
    this.h = h;
	this.area = w*h;
   
}

/* function area(pole){
	
	this.pole=pole;
	
} */
/* function Canv(W, H){

	this.H=H;
	this.W=W;
	
}

function Positions(x, y){
	this.x = x;
	this.y = y; 
	
	
}*/
	
function cutlist(){
		var sidescanv = document.getElementById("sides").value;
	var backscanv = document.getElementById("backs").value;
	sidescanv_h = '';
	sidescanv_w = '';
	backscanv_h = '';
	backscanv_w = '';
	
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
	
	var ilosc = document.getElementsByName("carcassid");
	var counter = ilosc.length;	//qty of carcasses
	
	kerf = document.getElementById("kerf").value/2;
	var myRect_gr = [];	
	var myRect_cien = [];
	var AreaCanvGruby =(sidescanv_h * sidescanv_w);
	var AreaCanvCienki = (backscanv_h * backscanv_w);
	//var myArea = [];
	//var myCan =[];
	//var myPosition = [];
	
	
	
	for (var i = 0; i < counter; i++){
		var carcassid = document.getElementById("carcassid." +i).value;
		var qty_s = document.getElementById("qty_s." +i).value;
		var side_h = document.getElementById("side_h." +i).value/2;
		var side_w = document.getElementById("side_w." +i).value/2;
		var side_t = document.getElementById("side_t." +i).value;
		var qty_t = document.getElementById("qty_t." +i).value;
		var t_h = document.getElementById("t_h." +i).value/2;
		var t_w = document.getElementById("t_w." +i).value/2;
		var t_t = document.getElementById("t_t." +i).value;
		var qty_b = document.getElementById("qty_b." +i).value;
		var b_h = document.getElementById("b_h." +i).value/2;
		var b_w = document.getElementById("b_w." +i).value/2;
		var b_t = document.getElementById("b_t." +i).value;
		var qty_sh = document.getElementById("qty_sh." +i).value;
		var sh_h = document.getElementById("sh_h." +i).value/2;
		var sh_w = document.getElementById("sh_w." +i).value/2;
		var sh_t = document.getElementById("sh_t." +i).value;
		
		var w = sidescanv_w;
		var h = sidescanv_h;
		
		
		for(var j=0; j<qty_s; j++){
			
			 side = [carcassid, qty_s, side_w, side_h, side_t];
			 myRect_gr.push(new Shape('side', side[0], side[2], side[3]));
			 
			 	
				
						
				
		}
		//var l=0;

		
		for(var j=0; j<qty_t; j++){
			bottom = [carcassid, qty_t, t_w, t_h, t_t];
			myRect_gr.push(new Shape('top/bottom', bottom[0], bottom[2], bottom[3]));
	
		}
		for(var j=0; j<qty_b; j++){
			back = [carcassid, qty_b, b_w, b_h, b_t];
			myRect_cien.push(new Shape('back', back[0], back[2], back[3]));
	
		}
			//do while loop, to avoid 0 shelves problem
			var k = 0;
		
			do{
				shelf=[carcassid, qty_sh, sh_w, sh_h, sh_t];
				if(shelf[2]>0){
				myRect_gr.push(new Shape('shelf', shelf[0], shelf[2], shelf[3]));
				}
				k++;
			}
			
			while(k < qty_sh);
			
		}	


		
	 //document.getElementById('cutlist1').innerHTML += "</br>"+h+"</br>";
	 
	 //sort arrays of cut list elements by hight descending
	 myRect_gr.sort(function(a, b) {
    return parseInt(b.h) - parseInt(a.h);
		});
		myRect_cien.sort(function(a, b) {
    return parseInt(b.h) - parseInt(a.h);
		});
	
	  	/* var canvas_s = " <canvas id='canv' width="+"'"+sidescanv_w+"'"+" height="+"'"+sidescanv_h+"'"+" style='border:1px solid #000000;'></canvas> ";
		
			document.getElementById('cutlist1').innerHTML += "</br>"+canvas_s+"</br>";
			
			 c = document.getElementById('canv');
		
		
			
				
			     ctx = c.getContext('2d'); */
	
	var totAreaGruby = 0;
	for (var i in myRect_gr){
		
		
		oRec = myRect_gr[i];
		totAreaGruby += oRec.area;
		//var mnoznik = parseInt( oRec.w * oRec.h );
		//myArea.push(new area(mnoznik));
		
		//document.getElementById("cutlist1").innerHTML += "<a>"+oRec.nazwa+" for carcass "+oRec.car+"size= "+oRec.w+" x "+oRec.h+" a pole powierzchni = "+oRec.area+"</a></br>";
		
		
		
		//document.getElementById('cutlist1').innerHTML += "</br>"+oRec.area+"</br>";
	 
	
					/* ctx.fillStyle = "red";

				ctx.fillRect(0,0,oRec.w,oRec.h);
				
				var trns = W+kerf;
				
					
				ctx.translate(trns, 0); */
				 		
	}
	  
  
   //document.getElementById("cutlist1").innerHTML += "<a>Cala powierzchnia = "+totAreaCien+"</a></br>";
	var totAreaCien = 0;
	for (var i in myRect_cien){
		
		var oRec1 = myRect_cien[i];
		totAreaCien += oRec1.area;
		//document.getElementById("cutlist1").innerHTML += "</br><a>"+oRec1.nazwa+" for carcass"+oRec1.car+"size= "+oRec1.w+" x "+oRec1.h+"a pole powierzchni = "+oRec1.area+"</a>";
		
		
	}
	
	var iloscCanvGruby = (Math.ceil(totAreaGruby/AreaCanvGruby) + 1);
	
	var iloscCanvCienki = (Math.ceil(totAreaCien/AreaCanvCienki));
	
	//document.getElementById('cutlist1').innerHTML += "</br>"+iloscCanvGruby+"</br>";
	document.getElementById('cutlist1').innerHTML = "";
	var sheet ="sheets of";
	var sheet1 = "sheets of";
	if(iloscCanvCienki ==0){
		sheet = "sheet of";
	}
	if(iloscCanvGruby ==0){
		sheet1 = "sheet of";
	}


	document.getElementById('cutlist1').innerHTML += "</br><h3>You need "+iloscCanvGruby+" "+sheet1 +" "+t_t+"mm thick and "+iloscCanvCienki+" "+sheet+"  "+b_t+ "mm thick</h3></br>";
	
	for(var i =0; i<iloscCanvGruby; i++){
		
		var canvas_gr = " <canvas id='canv_gr"+i+"' width="+"'"+sidescanv_w+"'"+" height="+"'"+sidescanv_h+"'"+" style='border:1px solid #000000;'></canvas>";
		document.getElementById('cutlist1').innerHTML += "Sheet number "+(i+1)+" of "+iloscCanvGruby +", thickness "+t_t+" mm:</br>"+canvas_gr+"</br>";
		
		
		
		
		
		
		
	}
	
	for(var i =0; i<iloscCanvCienki; i++){
		
			var canvas_cien = " <canvas id='canv_cien"+i+"' width="+"'"+sidescanv_w+"'"+" height="+"'"+sidescanv_h+"'"+" style='border:1px solid #000000;'></canvas>";
		document.getElementById('cutlist1').innerHTML += "Sheet number "+(i+1)+" of "+iloscCanvCienki+", thickness "+b_t+" mm:</br>"+canvas_cien+"</br>";
		var c1 = document.getElementById('canv_cien'+i);
		ctx = c1.getContext('2d');
		
		
	}

	
	
	
	
		var zostalo_gr_w = sidescanv_w;
		var zostalo_gr_h = sidescanv_h;
		var z =0;
	
		for (var i in myRect_gr){
		var c = document.getElementById('canv_gr'+z);
		
		ctx = c.getContext('2d');
			if (zostalo_gr_w >=oRec.w){ 
		
			var x = sidescanv_w - zostalo_gr_w;
			var y = 0;
			ctx.fillStyle = "red";

			ctx.fillRect(x,y,oRec.w,oRec.h);
			ctx.fillStyle = "black";
			ctx.font = "10pt sans-serif";
			ctx.textBaseline = 'top';
			ctx.fillText(""+(oRec.h*2)+"x"+(oRec.w*2)+" (HxW)",(oRec.h/2), (oRec.w/4));
				
			var trns = oRec.w + kerf;
							
			
			
			 zostalo_gr_w = zostalo_gr_w - trns;
			 zostalo_gr_h = sidescanv_h - oRec.h - kerf;
			 //ctx.translate(trns, y);
			}
		
		 else if ((zostalo_gr_w < oRec.w) && (zostalo_gr_h >=oRec.h)){
			 x=0;
			 y= zostalo_gr_w;
			 
			 ctx.fillStyle = "red";
			 

			ctx.fillRect(x,y,oRec.w,oRec.h);
						ctx.fillStyle = "black";
			ctx.font = "10pt sans-serif";
			ctx.textBaseline = 'top';
			ctx.fillText(""+(oRec.h*2)+"x"+(oRec.w*2)+" (HxW)",(oRec.h/2), (oRec.w/4));
				
			 trns = oRec.h + kerf;
							
			
			
			 zostalo_gr_h = zostalo_gr_h - trns;
			 zostalo_gr_w = sidescanv_w - oRec.w - kerf;
			 
			 ctx.translate(x, trns);
			 
		 }
		 else if((zostalo_gr_h < oRec.h)){
			 
			 z =z+1;
			
			 
			 
		 }
		 
		 
		 
	 }
	
	
	
  return false;
	
}	
		
		
    
