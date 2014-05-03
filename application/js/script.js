window.onload=function(){
	init();
}
window.onresize=showSlider;	
	
	function init(){
		changeActive();
		setStyle();
		showSlider();
	
		row_editor();
		var popup = new popup(document.getElementById('pagepreloader'),document.getElementById('loader'));
		function popup(shadow,formbox){
		this.shadow=shadow;
		this.formbox=formbox;
		this.fadeInOut= function(obj, from, to, time){
			if (window.getComputedStyle){
				objOpacity =parseFloat((window.getComputedStyle(obj,null)).opacity);
				objVisibility = window.getComputedStyle(obj,null).visibility;
			}
			else  {
				objOpacity =parseInt(obj.currentStyle.filter)/100;
				objVisibility=obj.currentStyle.visibility;
			};
			if (objVisibility=='hidden') {
				obj.style.visibility='visible';
			};
			var start = new Date().getTime();
			setTimeout(changeOpacity,10);
				function changeOpacity(){
					var now = (new Date().getTime())-start;
					if (objOpacity<from) {
						objOpacity=from;
					}
					var progress=now/time;
					objOpacity=(to-from)*progress+from;
					obj.style.opacity=objOpacity;
					obj.style.filter='alpha(opacity='+objOpacity*100+')';
					if (progress<1) {
						setTimeout(changeOpacity,10);
					}
				}
			setTimeout(function(){
				if ((objVisibility=='visible')&&Math.round(objOpacity)==0) {
					obj.style.visibility='hidden';
			}},700);
		}
		this.show = function() {
			this.fadeInOut(this.shadow,0,0.3,300);
			this.fadeInOut(this.formbox,0,1,300);		
		}
		this.hide = function(){
			this.fadeInOut(this.shadow,1,0,300);
			this.fadeInOut(this.formbox,1,0,300);
		}
	}
		popup.hide();
	}

	function odd_pair(){
		

		if(document.getElementById("table_id")){

			var Obj=document.getElementById("table_id");
				var divs=Obj.getElementsByTagName("div");
				var arrdiv=new Array();
				var f=0;
				for(var i=1;i<divs.length;i++){
					if(divs[i].className=="table-row"&&divs[i]!=undefined){
						arrdiv[f]=0;
						arrdiv[f]=divs[i]
						f++;
						}
				}
				for(var k=0;k<arrdiv.length;k++){
					if(arrdiv[k]!=undefined){
						if(k==arrdiv.length-1){
							addClass("last-row",arrdiv[k]);
						}
						if(k%2==1){
							addClass("odd",arrdiv[k]);
						}
						else{
							addClass("pair",arrdiv[k]);		
						}
					}
				}
		}	
	}
	function setStyle(){
			var head = document.getElementsByTagName('head')[0];
			function appendStyle(obj,link){
			var style = document.createElement('link');
			style.setAttribute('type','text/css');
			style.setAttribute('rel','stylesheet');
			if ((link!=null)&& (typeof(link)=='string') ){
				style.setAttribute('href',link);
			}
			obj.appendChild(style);
		}
			if (window.getComputedStyle){
			appendStyle(head,"../public/css/framework.css");
			appendStyle(head,"../public/css/main.css");		
		}
		else {
			appendStyle(head,"../public/css/iestyle.css");
		}
	}

		function showSlider(){
		try{
			var elements=document.getElementsByTagName('div');
				for(var i=0;i<elements.length;i++){
					if(elements[i].className=='slider'){
						var slider=elements[i];
						break;
					}
			}
			if(window.getComputedStyle){
				var sliderDisp=window.getComputedStyle(slider,null).display;
			}
			var img=document.createElement('img');
			img.setAttribute('src','public/images/header.jpg');
			
			if(document.documentElement.clientWidth>=960){
				if (!hasChild(slider)){
					slider.appendChild(img);
				}
			}
			else if(document.documentElement.clientWidth<960){
					if (hasChild(slider)) {
					removeChildren(slider);
				}
			}
		}
		catch(e){
			console.log('Sometrouble with slider');
		}

	}

	function hasChild(obj){
		var hasChildElem=false;
		for (var child = obj.firstChild;child;child=child.nextSibling){
			if(child.nodeType==1){
				hasChildElem=true;
			}
		}
		console.log(hasChildElem);
		return hasChildElem;
	}

	function removeChildren(obj){
		var children=obj.childNodes;
		for (var i = 0; i<children.length; i++) {
			obj.removeChild(children[i])
		};
	}

	function changeActive(){
		var list=document.getElementsByTagName("ul")[0];
		console.log(list);
		var li=list.getElementsByTagName("li");
		var url=window.location.toString();
		for(var i=0;i<li.length;i++){
			console.log("in cicle");
			if(url.indexOf(li[i].id)!=-1){
				console.log("in if");
				addClass("active",li[i].firstChild);
			}
			else if(li[i].firstChild.className.indexOf("active")!=-1){
				removeClass("active",li[i].firstChild);
			}
		
		
		}
		if(url.indexOf("models")!=-1) {addClass("active",document.getElementById("brands").firstChild);}
		if(url.indexOf("options")!=-1) {addClass("active",document.getElementById("optg").firstChild);}
		if(url.indexOf("baseequs")!=-1) {addClass("active",document.getElementById("cars").firstChild);}
		if(window.location.pathname=="/") {addClass("active",document.getElementById("about").firstChild);}

	}	