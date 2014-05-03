window.onload = function createObj(obj, objects) {

	// Connecting of style for IE8
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
		appendStyle("../../public/css/iestyle.css");;		
	}

	// The cap for IE 7 and less
	if(document.all && !document.querySelector) {
			var body = document.getElementsByTagName("body");
			var container = document.getElementById("wrapper");
			badBrowser();
			}
	function badBrowser(){
		body[0].removeChild(container);
		createMessage();
		}
	function createMessage(){
		var text = "You're using bad browser! Go AWAY!";
		var messageCont = document.createElement("div");
		var heading = document.createElement("h2");
		var newText = document.createTextNode(text);
		messageCont.className = "ie6";
		heading.appendChild(newText);
		messageCont.appendChild(heading);
		body[0].appendChild(messageCont);
	}

	var body = document.body;
	
	if (document.all && document.querySelector && !document.addEventListener) {
		// Error message for IE8
		document.getElementById('content').style.display = 'none';
		var msg = document.getElementById('msg').firstChild;
		msg.id = 'msg_IE';
		msg.style.display = 'block';
	} else {
		// The creating of properties
		function obj(id, left, right, top, bottom, width, height, velocity){
			this.id = id;
			this.left = left;
			this.right = right;
			this.top = top;
			this.bottom = bottom;
			this.width = width;
			this.height = height;
			this.velocity = velocity;
		}

		// The creating of new objects
		var objects= [new obj('car1', -538, null, null, 180, 538, 250, 0.72),
					new obj('car2',null,-676,null,15,676,220,0.65),
					new obj('cloud1',null,20,30,null,150,102,500),
					new obj('cloud2',20,null,7,null,200,90,100),
					new obj('sun',100,null,0,null,100,100,2.5),
					new obj('moon',null,100,277,null,100,100,3),
					new obj('car1wheel1',49,null,null,13,94,94,0.5),
					new obj('car1wheel2',null,58,null,13,94,94,0.5),
					new obj('car2wheel1',65,null,null,15,88,88,-0.5),
					new obj('car2wheel2',null,114,null,15,88,88,-0.5)
					]
		for(var i = 0; i<objects.length; i++){
			var elem = document.getElementById(objects[i].id);
			elem.style.left = objects[i].left + "px";
			elem.style.right = objects[i].right + "px";
			elem.style.top = objects[i].top + "px";
			elem.style.bottom = objects[i].bottom + "px";
			elem.style.width = objects[i].width + "px";
			elem.style.height = objects[i].height + "px";
			elem.style.background = "url(../public/images/" + elem.id + ".png)";
		}

		// The action on mouse moving
		body.onmousemove = function(e) {
			e = e || window.event;
			var posx=e.pageX;
			var posy=e.pageY;
			move(posx,posy);
			changeBg(posy);
		}

		// The changing of background
		function changeBg(posy) {
			var dayColor = "#DBE3E4";
			var nightColor = "#6699FF";
			var dayRGB = dayColor.replace("#","").match(/.{2}/g); 
			var nightRGB = nightColor.replace("#","").match(/.{2}/g);
			var night = posy/body.offsetHeight;
			var day = 1 - night;
			var R,G,B;
			R = Math.floor( ('0x'+dayRGB[0]) * day + ('0x'+nightRGB[0]) * night );
			G = Math.floor( ('0x'+dayRGB[1]) * day + ('0x'+nightRGB[1]) * night );
			B = Math.floor( ('0x'+dayRGB[2]) * day + ('0x'+nightRGB[2]) * night );
			body.style.backgroundColor = 'rgb('+R+ ',' + G + ',' + B +')'; 		
			}

		function move(posx,posy) {

			// The changing of properties for FF and Opera
			for (var i = 0; i < objects.length; i++) {
				var posMoon, posSun;
				var elem = document.getElementById(objects[i].id);
				if (posy<700) {
					posMoon = posy;
					document.getElementById('cloud1').style.opacity = posMoon/750;
				};
				if (posy<300) {
					posSun = posy;
					document.getElementById('cloud2').style.opacity = (300-posSun)/350;
				};
				var movedObj= {
					movedLeft : "left: " + (objects[i].left + (posx/objects[i].velocity)) + "px;",
					movedRight : "right: " + (objects[i].right + (posx/objects[i].velocity)) + "px;",
					movedUp : "top: " + (objects[i].top - (posMoon/objects[i].velocity)) + "px;-moz-transform:scale("+(posMoon/650)+");-o-transform:scale("+(posMoon/500)+");",
					movedDown : "top: " + (objects[i].top + (posy/objects[i].velocity)) + "px;-moz-transform:scale("+(500/(500+posSun))+");-o-transform:scale("+(500/(500+posSun))+");",
					rotate : "-moz-transform:rotate("+(posx/objects[i].velocity)+"deg);-o-transform:rotate("+(posx/objects[i].velocity)+"deg);"
				}
				
				elem.style = elem.attributes.style.value + movedObj[elem.getAttribute('name')];
				document.getElementById('headerSky').style.right = posx/1000 + 'px';
				
				//The changing of properties for Chrome and IE
				if (navigator.userAgent.toLowerCase().match('chrome') || navigator.appName == 'Microsoft Internet Explorer') {
					//elem.attributes.style.value = elem.attributes.style.value + movedObj[elem.getAttribute('name')];
	        		document.getElementById(objects[0].id).style.left = (objects[0].left + (posx/objects[0].velocity)) + "px";
	        		document.getElementById(objects[1].id).style.right = (objects[1].right + (posx/objects[1].velocity)) + "px";
	        		document.getElementById(objects[4].id).style.top = (objects[4].top + (posy/objects[4].velocity)) + "px";
	        		document.getElementById(objects[4].id).style["-webkit-transform"]= 'scale('+(500/(500+posSun))+')';
	        		document.getElementById(objects[4].id).style["-ms-transform"]= 'scale('+(500/(500+posSun))+')';
	        		document.getElementById(objects[5].id).style.top = (objects[5].top - (posMoon/objects[5].velocity)) + "px";
	        		document.getElementById(objects[5].id).style["-webkit-transform"]= 'scale('+(posMoon/500)+')';
	        		document.getElementById(objects[5].id).style["-ms-transform"]= 'scale('+(posMoon/500)+')';
	        		if (i>5 && i<10) {
	        			document.getElementById(objects[i].id).style["-webkit-transform"]= 'rotate('+(posx/objects[i].velocity)+'deg)';
	        			document.getElementById(objects[i].id).style["-ms-transform"]= 'rotate('+(posx/objects[i].velocity)+'deg)';
	        		}
				}
			};
		};
	}
}