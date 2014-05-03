window.onload=function(){
	var Obj=document.getElementById("table_id");
	var divs=Obj.getElementsByTagName("div");
	var div=Obj.getElementsByTagName("div")[0];
	console.log(divs);
	for(var i=1;i<divs.length;i++){
		if(i%2==1){
			div.nextElementSibling.className="table-row odd";

			div=div.nextElementSibling;
		}
		else{
		div.nextElementSibling.className="table-row pair";
		div=div.nextElementSibling;
		}
	console.log(div.nextElementSibling);
	}
}