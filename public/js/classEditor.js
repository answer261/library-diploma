
function hasClass(nameOfClass, obj){
			var reg = new RegExp('(\\s{0,}|^)'+nameOfClass+'(\\s{0,}|^)');
			return !!obj.className.match(reg);
			
	}
function addClass(nameOfClass, obj){
			if (!hasClass(nameOfClass, obj)) {
				if(!!obj.className){
					obj.className += " " + nameOfClass;
				}
				else{
					obj.className += nameOfClass;
			}
			}
	}
function removeClass(nameOfClass, obj){
			if (hasClass(nameOfClass, obj)) {
				obj.className = obj.className.replace(nameOfClass,"");
			}
	}
function getElementsByClass(cls){
		if(document.getElementsByClassName){
			return document.getElementsByClassName(cls);
		}
		else{
		var array = new Array();
		var body = document.getElementsByTagName("body")[0];
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