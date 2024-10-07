

// -------------------- MouseOver -------------------- //

function setAjm(){
	ajm_i = new Array();
	var obj = document.getElementsByTagName("img");
	for(var i=0; i<obj.length; i++){
		if(obj[i].className.indexOf("ajm") > -1){
			var obj_o = obj[i].src.slice(0, -4) +"_o"+ obj[i].src.slice(-4);
			ajm_i[i] = new Image(); ajm_i[i].src = obj_o;
			if(obj[i].className == "ajm_o") obj[i].src = obj_o;
			else {
				obj[i].onmouseover = function(){
					this.src = this.src.slice(0, -4) +"_o"+ this.src.slice(-4);
				}
				obj[i].onmouseout = function(){
					this.src = this.src.replace("_o.", ".");
				}
			}
		}
	}
}
if(window.addEventListener) window.addEventListener("load", setAjm, false);
else if(window.attachEvent) window.attachEvent("onload", setAjm);
