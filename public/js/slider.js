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

			var ul=document.createElement('ul');
			ul.setAttribute('id','slider');

			if(document.documentElement.clientWidth>=960){
				if(!hasChild(slider)){
				slider.appendChild(ul);
				for (var i = 0; i < 5; i++) {
						var li = document.createElement('li');
						li.setAttribute('id','img'+(i+1));
						var img = document.createElement('img')
						img.setAttribute('src','/public/images/slider_img'+(i+1)+'.jpg');
						if (i==1) {
							if(window.getComputedStyle){
							img.setAttribute('class','activeImg');
						}
						else{
							img.setAttribute('className','activeImg')
						}
						};
						li.appendChild(img);
						ul.appendChild(li);

					};
				}
			}
						
			else if(document.documentElement.clientWidth<960){
					if (hasChild(slider)) {
					removeChildren(slider);
				}
			}
		
		}
		catch(e){
			console.log('Error: Troubles with slider.js');
		}

	}

function getLeft(obj){
		if(window.getComputedStyle){
			return parseFloat(window.getComputedStyle(obj,null).left);
		}
		else{
			return parseFloat(obj.currentStyle[left]);
		}
	}

function getWidth(obj){
		if(window.getComputedStyle){
			return parseFloat(window.getComputedStyle(obj,null).width);
		}
		else{
			return parseFloat(obj.currentStyle.width);
		}
	}

Event = (function() {
  var guid = 0
  
  function commonHandle(event) {
     var handlers = this.events[event.type]

	for ( var g in handlers ) {
      var handler = handlers[g];

      var ret = handler.call(this, event)
      if ( ret === false ) {
          event.preventDefault();
          event.stopPropagation();
      }
    }
  }
  
  return {
    add: function(elem, type, handler) {
      
      if (!handler.guid) {
        handler.guid = ++guid;
      }
      
      if (!elem.events) {
        elem.events = {};
		elem.handle = function(event) {
		  if (typeof Event !== "undefined") {
			return commonHandle.call(elem, event);
		  }
        }
      }
	  
      if (!elem.events[type]) {
        elem.events[type] = {};        
      
        if (elem.addEventListener)
		  elem.addEventListener(type, elem.handle, false);
		else if (elem.attachEvent)
          elem.attachEvent("on" + type, elem.handle);
      }
      
      elem.events[type][handler.guid] = handler;
    },
    
    remove: function(elem, type, handler) {
      var handlers = elem.events && elem.events[type];
      
      if (!handlers) return
      
      delete handlers[handler.guid];
      
      for(var any in handlers) return; 
	  if (elem.removeEventListener)
		elem.removeEventListener(type, elem.handle, false);
	  else if (elem.detachEvent)
		elem.detachEvent("on" + type, elem.handle);
	  delete elem.events[type];
	  for (var any in elem.events) return
	  try {
	    delete elem.handle;
	    delete elem.events;
	  } catch(e) { 
	    elem.removeAttribute("handle");
	    elem.removeAttribute("events");
	  }
    } 
  }
}());



	function getClass(obj){
		if(!!(window.getComputedStyle)){
			return obj.getAttribute('class');
		}
		else{
			return obj.className;

		}
	}

	function setClass(obj, class_name){
		if (!!(window.getComputedStyle)) {
			return obj.setAttribute('class', class_name);
		}
		else{
			return obj.className =class_name;
		}
	}

function move(){
	var slider = document.getElementById('slider');
	var sl_elements = slider.getElementsByTagName('li');	
	var sl_width = getWidth(slider);
	var img_count = sl_elements.length;
	var toProc = sl_width/100;
	var divider = ((sl_width/img_count));
	var img_width=(((img_count-2)*divider));
	console.log((((img_count-2)*divider)/toProc)+'%')
	var small_space = (((sl_width-img_width)/(img_count-1)));
	console.log((small_space/toProc)+'%');
	var el_width=Array();	
	addEvents();

	function addEvents(){
		for (var i = 0;i<sl_elements.length;i++){
			Event.add(sl_elements[i],'click',sl_mover);
		}
	}

	function removeEvents(){
		for (var i = 0; i < sl_elements.length; i++) {
			Event.remove(sl_elements[i],'click',sl_mover)
		};
	}
	var el_left = Array();
	el_left[0]=0;
	sl_elements[0].style.left=0;
		for (var i = 1; i<sl_elements.length; i++){
			el_left[i]=el_left[i-1]+small_space;
			sl_elements[i].style.left=(el_left[i]/toProc)+'%';
		}
	var toLeft=Array();
	for (var i = 0; i < sl_elements.length; i++) {
		
	};

function sl_mover(event){
		event = event||window.event;
		thisId = this.getAttribute('id').substring(3,4)-1;
		slide(this,(getLeft(this)/toProc),(el_left[thisId]/toProc));
		console.log('loopThis '+ ((getLeft(this)/toProc))+'  || '+(el_left[thisId]/toProc));
			loopPrev(this);
			loopNext(this);
			
		
	}
function loopNext(el){
	var next_el = next(el);
		if(next_el!==null){
		if (next_el.nodeName.toLowerCase()=='li'){
			var imgNextId = parseInt(next_el.getAttribute('id').substring(3,4)-1);
			slide(next_el, ((getLeft(next_el)/toProc)),((el_left[imgNextId]/toProc)+50));
			console.log('loopNext '+ ((getLeft(next_el)/toProc))+'  || '+((el_left[imgNextId]/toProc)+50));
			
			loopNext(next_el);
		}
	}
	
}
function loopPrev(el){
	var prev_el= prev(el);
	if(prev_el!==null){
	var prevElId=(prev_el.getAttribute('id').substring(3,4)-1);
	if((prev_el.nodeName.toLowerCase()=='li')&&prevElId!=0){
		slide(prev_el,(getLeft(prev_el)/toProc),(el_left[prevElId]/toProc));
		console.log('loopPrev '+ ((getLeft(prev_el)/toProc))+'  || '+(el_left[prevElId]/toProc));
		loopPrev(prev_el);
	}
}
}

function next(el){
	while(el=el.nextSibling)
			if (el.nodeType==1) break;
		return el;
}
function prev(el){
		while(el= el.previousSibling)
			if (el.nodeType==1) break;
		return el;
	}
}
	

function slide(obj,from,to){		
		var start = new Date().getTime();
		var time = 1000;
		setTimeout(changeLeft,10);

			function delta(progress) {
	     		function d(progress) {
		        for(var a = 0, b = 1, result; 1; a += b, b /= 2) {
		           if (progress >= (7 - 4 * a) / 11)
		               return -Math.pow((11 - 6 * a - 11 * progress) / 4, 2) + Math.pow(b, 2);
		        }
	     	}
	     	return 1 - d(1 - progress);
			}

		function changeLeft(){
				var now = (new Date().getTime())-start;
				var progress=now/time;
				objLeft=(to-from)*delta(progress)+from;
				obj.style.left=objLeft+'%';
				if (progress<1) {

					setTimeout(changeLeft,10);
				}
				else
				{
					obj.style.left=to+'%';		
				}
			}
	}	