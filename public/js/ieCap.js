var ieCap = true;
if(ieCap == true){
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
