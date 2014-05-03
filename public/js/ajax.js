
    function createRequestObject()   
    {  
        try { return new XMLHttpRequest() }  
        catch(e)   
        {  
            try { return new ActiveXObject('Msxml2.XMLHTTP') }  
            catch(e)   
            {  
                try { return new ActiveXObject('Microsoft.XMLHTTP') }  
                catch(e) { return null; }  
            }  
        }  
    } 
function eventsToA(){
		var list=document.getElementsByTagName("ul")[0];

		var li=list.getElementsByTagName("a");
		for(var i=0;i<li.length;i++){
			addEvent(li[i],"click",showContent);
		}
		var admn = li.length;
		if(!!document.getElementById("but1"))
		{
		
			for(var i=1;i<=6;i++){
				addEvent(document.getElementById("but"+i),"click",showContent);
			}
		}
		return admn;
}
	
function eventsToAll(){
	var butt = getElementsByClass("add_button")[0];
		if(!!butt && butt.tagName!="INPUT"){
			addEvent(butt,"click",showContent);
		}
		if((!!butt && butt.tagName=="INPUT")&&butt.value!="Відправити"){
			addEvent(butt.parentNode,"submit",showContent);
			butt.parentNode.setAttribute("action","../../admin/clients/add/register");
		}

	var pencils = getElementsByClass("icon_pencil");
	if(!!getElementsByClass("icon_pencil")[0]){
		for(var i=0;i<pencils.length;i++){
			addEvent(pencils[i],"click",showContent);
		}
	}

}
function showContent(event) {
	event = event || window.event;
	var targ = event.target || event.srcElement;
    	var cont = document.getElementById('content'); 
    	var waiting = waitingDiv(); 

	cont.innerHTML="";
	cont.appendChild(waiting);
        var http = createRequestObject(); 
       
	if(!!targ){ 
	        if( !!http )   
	        {  
		if(targ.tagName=="I"){targ = targ.parentNode;}
			openRequest(targ,http); 
	            http.onreadystatechange = function ()   
	            {  
	                if(http.readyState == 4 && http.status == 200)   
	                {
	                	cont.innerHTML=getContent(http.responseText,'div','content',cont);
	                	
				                odd_pair();
						
						eventsToAll();
						checkFormAdm();
						row_editor();
						changeActive();
						if(eventsToA()<6){
							//showSlider();
							//move();
							}
						
						
						
	                }  
	            }  
	            http.send();      
	        }  
	        else   
	        {  
	            document.location = "http://drago.if.ua/admin/"+targ.parentNode.id;  
	        } 
	} 

    }  
  
  	function getContent(strToParse,tag,nameOfClass,cont){
		var parser = document.createElement("div");
		parser.style.display="none";		 
		cont.innerHTML="";
		parser.innerHTML="";
		parser.innerHTML = strToParse;
		var elements = parser.getElementsByTagName(tag);
			for(var i=0; i<elements.length;i++){
				if (elements[i].id==nameOfClass) {
					return elements[i].innerHTML;
					
				}
  		}
	}


function waitingDiv(){
    var div = document.createElement("div");
    div.className = "waiting-div";
    return div;
}
function openRequest(targ,http){
	var targSave="";
	if(!!targ.parentNode){
		if(!!targ.parentNode.id){
     	   		targSave=targ.parentNode.id;
    		}
		else{
			targSave = "";
		}
	}
    	if((!!targ.parentNode && targ.parentNode.className == "addhref")&&(targ.value != "Відправити")){
		targSave=location.href+"/add";
		http.open("get",targSave,true);
		history.replaceState(3, "",targSave);
		 http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded'); 
	}
	if((!!targ.parentNode && targ.parentNode.tagName=="LI")&&eventsToA()>=6){
		targSave = targ.parentNode.id;
		http.open("get","../../../admin/"+targSave,true);
		history.replaceState(3, "","../../../admin/"+targSave);
		
	}
	if((!!targ.parentNode && targ.parentNode.tagName == "LI")&&eventsToA()<6){
		http.open("get","../../../"+targSave,true);
		history.replaceState(3, "","../../../"+targSave);
	}
	
	

	
	if(targ.id.indexOf("but") != -1){
		var way = targ.getAttribute("alt");
		targSave = way;
		http.open("get",way,true);
		//history.pushState(3, "",way);
	}
	
}
	












/**/
	/*if(targ.className=="icon_pencil"){
		http.open("get","../../../admin/"+targSave+"/edit/"+targ.id,true);
	}*/
	
		
