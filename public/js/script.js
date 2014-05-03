window.onload=function(){
	init();
}
window.onresize=function(){
	showSlider();
	move();
}	
	
	function init(){
		check_javascript();
		changeActive();
		setStyle();
		showSlider();
		move();
		row_editor();
		checkFormAdm();
		validation();
		eventsToA();
		setTimeout(hide_loader,700)
	}
		function hide_loader(){
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

	function check_javascript(){
		
		var pagepreloader = document.getElementById('pagepreloader');
			var loader = document.createElement('span');
			loader.setAttribute('id','loader');
				pagepreloader.appendChild(loader);
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

	function checkFormAdm(){
		var form=document.getElementsByTagName("form");
		if(!!form[0]){
			var rows=getElementsByClass("table-row");
			for(var i=0;i<rows.length;i++){
				addClass("form-row",rows[i]);
			}
			var table=getElementsByClass("table");
			table[0].style.borderSpacing="6px";
			
		}
	}

	function getElementsByClass(cls){
		if(document.getElementsByClassName){
			return document.getElementsByClassName(cls);
		}
		else{
		var array = new Array();
		var bodys = document.getElementsByTagName("body");
		var body = bodys[0];
		var elements = body.getElementsByTagName("*");
		for (var i=0; i<elements.length; i++){
			var elem = elements[i];
			if(hasClass(cls, elem)){
				array.push(elem);
			}
			else{
				continue;
			}

		}
		return array;
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
			appendStyle(head,"../../public/css/framework.css");
			appendStyle(head,"../../public/css/main.css");		
		}
		else {
			appendStyle(head,"../../public/css/iestyle.css");
		}
	}

	function hasChild(obj){
		var hasChildElem=false;
		for (var child = obj.firstChild;child;child=child.nextSibling){
			if(child.nodeType==1){
				hasChildElem=true;
			}
		}
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

		var a=list.getElementsByTagName("a");
		
		for(var i=0;i<a.length;i++){
			
				addEvent(a[i],"click",function(event){
					
						event = event || window.event;
						var targ = event.target || event.srcElement;
						if(targ.tagName!="I"){
							
							addClass("active",targ);
							for(var k=0;k<a.length;k++){
								if(a[k].parentNode.id!=targ.parentNode.id){
									if(hasClass("active",a[k])){
										removeClass("active",a[k]);
									}
								}
							}
						}
						else{
							addClass("active",targ.parentNode);
							for(var k=0;k<a.length;k++){
								if(a[k].parentNode.id!=targ.parentNode.parentNode.id){
									if(hasClass("active",a[k])){
										removeClass("active",a[k]);
									}
								}
							}
						}
				});
			
		}
		for(var i=0;i<a.length;i++){
			if(window.location.pathname.indexOf(a[i].parentNode.id)!=-1&&a[i].parentNode.id != ""){
				addClass("active",a[i]);
			}
			else{
				removeClass("active",a[i]);
			}
		}
		
		if(window.location.pathname == "/"){addClass("active",a[0]);}
	}
function addEvent(elem, type, handler){
	   if (elem.addEventListener){
	     elem.addEventListener(type, handler, false)
	   } 
	   else {
	  	elem.attachEvent("on"+type, handler)
	   }

 }	

	