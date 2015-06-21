//function to add sizes to array(method)
function Shape(nazwa, car, w, h) {
	this.nazwa = nazwa;
	this.car = car;

    this.w = w;
    this.h = h;
   
}
function Canv(W, H){

	this.H=H;
	this.W=W;
	
}

function Positions(x, y){
	this.x = x;
	this.y = y;
	
	
}
	
function cutlist(){
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
	
	var ilosc = document.getElementsByName("carcassid");
	var counter = ilosc.length;	//qty of carcasses
	
	kerf = document.getElementById("kerf").value/2;
	var myRect_gr = [];	
	var myRect_cien = [];
	var myCan =[];
	var myPosition = [];
	
	
	
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
		
		    var p =0;
			do{
				carcass_s = [side, bottom, shelf];
				carcass_b = [back];
				
			
	
				
				p++;
			}
			while(p < counter);	
				
			
			   
			
			
			
			
			
			
			
			
			
			
		}	


		
	 //document.getElementById('cutlist1').innerHTML += "</br>"+h+"</br>";
	 
	 //sort arrays by hight descending
	 myRect_gr.sort(function(a, b) {
    return parseInt(b.h) - parseInt(a.h);
		});
		myRect_cien.sort(function(a, b) {
    return parseInt(b.h) - parseInt(a.h);
		});
	
	  	//var canvas_s = " <canvas id='canv' width="+"'"+sidescanv_w+"'"+" height="+"'"+sidescanv_h+"'"+" style='border:1px solid #000000;'></canvas> ";
		
			//document.getElementById('cutlist1').innerHTML += "</br>"+canvas_s+"</br>";
	
	
	for (var i in myRect_gr){
		
		
		oRec = myRect_gr[i];
		document.getElementById("cutlist1").innerHTML += "<a>"+oRec.nazwa+" for carcass "+oRec.car+"size= "+oRec.w+" x "+oRec.h+"</a></br>";
		
		//document.getElementById('cutlist1').innerHTML += "</br>"+canvas_s+"</br>";
	
		
		
		
	 
	
			
			
			/* c = document.getElementById('canv');
		
		
			
				
			     ctx = c.getContext('2d');
				
				ctx.fillStyle = "red";

				ctx.fillRect(0,0,oRec.w,oRec.h);
				var trns = W+kerf;
				
					
				ctx.translate(trns, 0);
				  */ 
				
			
		
		
		
		
	}
	
	for (var i in myRect_cien){
		
		oRec1 = myRect_cien[i];
		document.getElementById("cutlist1").innerHTML += "</br><a>"+oRec1.nazwa+" for carcass"+oRec1.car+"size= "+oRec1.w+" x "+oRec1.h+"</a>";
		
		
	}
	
	
	
	
  return false;
	
		
		
		




}	
