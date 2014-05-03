var EventsObject = {
	dragElemId: "drag",
	moveElemId: "move",
	init: function () {
		$("body").append($("<div>", { "id": "jsEvent", "class": "btn", "text": "Javascript Event"}));
		$("body").append($("<div>", { "id": "jsAttach", "class": "btn", "text": "Javascript Event"}));
		$("body").append($("<div>", { "id": "jqEvent", "class": "btn", "text": "Jquery Event"}));
		$("body").append($("<div>", { "id": "jqOn", "class": "btn", "text": "Jquery Event"}));
		$("body").append($("<div>", { "id": "drag", "class": "drag", "text": "Drag me"}));
		$("body").append($("<input>", { "id": "inpt"}));

		this.bindEvents();
	},
	bindEvents: function() {
		var self = this;
		document.getElementById("jsEvent").onclick = function(e){
			console.log(e.type);
		};

		document.getElementById("jsEvent").ondblclick = function(e){
			console.log(e.type);
		}

		document.getElementById("jsAttach").addEventListener("click", function(e){console.log(e.type)}, false);

		$("#jqEvent").click(function(e){
			console.log(e.type);
		});

		$("#jqOn").on("click", function(e){
			console.log(e.type)
		});

		document.getElementById("inpt").onfocus = function(){
			alert("I have a focus");
		}
		document.getElementById("inpt").onblur = function(){
			alert("I lost my focus :(");
		}

		$("#jqEvent").trigger("click");

		document.getElementById(this.dragElemId).onmousedown = function(e){
			var e = e || window.event,
				elem = e.target || e.srcElement;
			self.elem = elem;	
			self.drag(e);
		};

		document.getElementById(this.dragElemId).onmouseup = function() {
			self.releaseElem();
		};

		document.body.onkeyup = function(e) {
			if(e.keyCode == 17){
				e.target.style.background = "green";
			}
		}
	},
	drag: function(e) {
		var self = this;
		var style = window.getComputedStyle(document.getElementById(self.dragElemId), null);
		document.onmousemove = function(e) {
			document.getElementById(self.dragElemId).style.left = e.clientX - (parseInt(style.width)/2) + "px";
			document.getElementById(self.dragElemId).style.top = e.clientY - (parseInt(style.height)/2) + "px";

		}	
	},
	releaseElem: function() {
		document.onmousemove = function() {
			return false;
		}
	}
}

$(document).ready(function() {
   EventsObject.init();
});