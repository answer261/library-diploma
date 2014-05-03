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