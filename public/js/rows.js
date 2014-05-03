window.onresize = function(){
	var test = (document.body.clientWidth < 300) ? true : false;
		var cells = getElementsByClass("table-cell");
	
		for(var i=0; i<cells.length; i++){
		if(test && !hasClass("rows",cells[i])){
			addClass("rows", cells[i]);
			
		}
	else if(!test && hasClass("rows",cells[i])){
		removeClass("rows", cells[i]);
	}
}
}