window.onload = initPage;
	
function initPage(){
	ieCap();
	setStyle();
	odd_pair();
	row_editor();
	changeActive();
	checkFormAdm();
	eventsToA();
	eventsToAll();
}
	
function odd_pair(){
	

	if(document.getElementById("table_id")){

		var Obj=document.getElementById("table_id");
			var divs=Obj.getElementsByTagName("div");
			var arrdiv=new Array();
			var f=0;
			var pencils = getElementsByClass("icon_pencil");
			for(var i=1;i<divs.length;i++){
				if(divs[i].className=="table-row"&&divs[i]!=undefined){
					arrdiv[f]=0;
					arrdiv[f]=divs[i]
					f++;
					}
			}
			for(var k=0;k<arrdiv.length;k++){
				if(!!getElementsByClass("icon_pencil")[0]){
					var goodChild = arrdiv[k].firstChild;
					if(goodChild.nodeType == 1){
						pencils[k].id = goodChild.innerHTML;
					}
					else{
						goodChild = goodChild.nextSibling;
						pencils[k].id = goodChild.innerHTML;
						
					}
				}
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
			if(window.location.pathname.indexOf(a[i].parentNode.id)!=-1){
				addClass("active",a[i]);
			}
			/*else{
				removeClass("active",a[i]);
			}*/
		}
		
	}
	
function setStyle(){
		var head = document.getElementsByTagName('head')[0];
		var headHtml=head.innerHTML;
	
		function appendStyle(link){
			var style = document.createElement('link');
			style.setAttribute('type','text/css');
			style.setAttribute('rel','stylesheet');
			if ((link!=null)&& (typeof(link)=='string') ){
				style.setAttribute('href',link);
			}
				head.appendChild(style);
			}	
			
		if (!window.getComputedStyle){
			appendStyle("../public/css/iestyle.css");;		
		}
		
	}
function ieCap(){
if(typeof(ieCapt) !== "undefined"){
		var body = document.getElementsByTagName("body");
		var container = document.getElementById("wrapper");
		badBrowser();
		}
	
else{
	return false;
}

function badBrowser(){
		body[0].removeChild(container);
		createMessage();
		}
	function createMessage(){
		var text = "You're using bad browser! Please download newest browser!";
		var messageCont = document.createElement("div");
		var heading = document.createElement("h2");
		var newText = document.createTextNode(text);
		messageCont.className = "ie6";
		heading.appendChild(newText);
		messageCont.appendChild(heading);
		body[0].appendChild(messageCont);
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
function addEvent(elem, type, handler){
   if (elem.addEventListener){
     elem.addEventListener(type, handler, false)
   } 
   else {
  elem.attachEvent("on"+type, handler)
   }

 }
 
function imgPreLoad(){
	imgs=document.getElementsByTagName("img");
	cont = document.getElementsByClassName("content")[0];
	alert(imgs.length);
	for(var i=0;i<imgs.length;i++){
		
		imgs[i].style.display="none";
		var imgCopy = new Image();
		imgCopy.src=imgs[i].getAttribute("src");
		addClass("imgLeft",imgCopy);
		imgCopy.onload= function(){
			imgs[i].style.display="inline";
		}
		
	}
}
