<!-- Main Page -->
<div class="content_nav" id="cont">
		<img class="imgLeft" src="public/images/1.png">
		<img class="imgLeft" src="public/images/2.png">
		<img class="imgLeft" src="public/images/3.png">
		<img class="imgLeft" src="public/images/4.png">
		<img class="imgLeft" src="public/images/5.png">
		<img class="imgLeft" src="public/images/6.png">
		<div class="row">
		<div class="column-33"><a id="but1" alt="../../admin/brands">Виробники</a></div>
		<div class="column-33"><a id="but2" alt="../../admin/clients">Клієнти</a></div>
		<div class="column-33"><a  id="but3" alt="../../admin/fueltypes">Тип палива</a></div>
	</div>
	<div class="row">	
		<div class="column-33"><a id="but4" alt="../../admin/carcasstypes">Тип кузова</a></div>
		<div class="column-33"><a  id="but5" alt="../../admin/cars">Автомобілі</a></div>
		<div class="column-33"><a  id="but6" alt="../../admin/optg">Опції</a></div>
	</div>
	</div>
	
		<script type="text/javascript">	if(document.getElementById("but1")){
		var leftImg = getElementsByClass("imgLeft");
		
		document.getElementById("cont").style.visability="hidden";
		imgLoaded = 0;
		for(var i=0;i<leftImg.length;i++){
			leftImg[i].onload = function(){
			imgLoaded++;
			if(imgLoaded == 6){
				initImg();
				}
			}
		}
				
		
			function initImg(){
			document.getElementById("cont").style.visability="visible";
			var s;
			for(var i=1;i<=6;i++){
				s = 'but'+i;
				var img ='url(public/images/'+i+'.png)';
				
					document.getElementById(s).style.background=img;
			}
		
			var content=document.getElementById("cont");
			content.onmouseover=function(e){
				var target = e ? e.target : window.event.srcElement;
				if(target.tagName=="A"){
					var element=document.getElementById(target.id);
					
					if(!!element){
						element.style.backgroundImage='url(public/images/'+target.id+'.png)';	
						element.style.color="#FFF";
						element.style.textShadow= "-2px -2px 2px #666, -2px 0 2px #666,0 -2px 2px #666, 2px 2px 2px #000,0px 2px 2px #000, 						2px 0 2px #000";
						
					}
				}
				
			}
			content.onmouseout=function(e){
				var target = e ? e.target : window.event.srcElement;
					if(target.tagName=="A"){
						var element=document.getElementById(target.id);
						
						var i=0;
						for(i=1;i<=6;i++){
							i.toString();
							if(element){
							
								if(target.id.indexOf(i)!=-1){
									element.style.backgroundImage='url(public/images/'+i+'.png)';
									element.style.textShadow="none";
									element.style.color="#424242";
									break;
									}
								}
						
							}
						}
					}
		}
	}</script>
</div>
<!-- /Main Page -->

				
			