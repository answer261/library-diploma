function validation(){
 	var form=document.getElementsByTagName("form")[0]; 
	if(!!form){													
	var input = document.getElementsByTagName("input");
	var select = document.getElementsByTagName("select");
	var functions= {												
		text : /^[A-Za-zа-яА-ЯёЁіІєЄїЇ\s-]{3,40}$/,
		telephone : /^[\d]{10}$/,
		email : /^[-a-z0-9!#$%&'*+=?^_`{|}~]{1,30}[.]{0,1}[-a-z0-9!#$%&'*+=?^_`{|}~]+@[A-Za-zа-яА-ЯёЁіІїЇ-]+(\.[A-Za-zа-яА-ЯёЁіІїЇ]{2,6}){1,3}$/,
		address : /^[\wа-яА-ЯёЁіІїЇ.,\s-]{3,60}$/,
		number : /^[\d]{3,10}$/,
		numberCom : /^[\d]{1,5}[,.\d]{2,5}$/
	}
	var tooltips= {													
		text : 'Дозволено: кирилиця, латиниця, пробіл, дефіс, 3-40 символів.',
		telephone : ' Дозволено: цифри, 10 символів. Приклад: 0668135002',
		email : 'Приклад: example@yourmail.com',
		address : 'Дозволено: кирилиця, латиниця, крапка, кома, пробіл, дефіс, 3-60 символів',
		number : 'Дозволено: цифри, 3-10 символів',
		numberCom : 'Дозволено: цифри, крапка, кома, 3-10 символів'
	}
	function errorMsg(errText, clsName, id){							
		var span = document.createElement("span");
		span.className = clsName;									
		span.innerHTML = errText;
		if(id !== "undefined"){
		span.id = id;
	}
		return span;
	}
	function initErrMsg(inputs){								
		for (var i = 0; i<inputs.length-1; i++) {
			if(input[i].getAttribute("type") == "hidden"){		
				continue;
			}
			else{
			createErrMsg = errorMsg(tooltips[input[i].getAttribute("valid")], "errorMsg"); 
			input[i].parentNode.appendChild(createErrMsg);			
			}
		}
		}
	initErrMsg(input);												
	form.onsubmit = function() {
		var valid = true;

		for (var i = 0;i<input.length-1;i++) {	
			if(input[i].getAttribute("type") == "hidden"){			
				continue;
			}
			else{
			var regexp = functions[input[i].getAttribute("valid")];
			if (regexp.test(input[i].value)) {						
				removeClass("err", input[i]);
				
			} else {
				valid = false;										
				addClass("err", input[i]);
				

			}
		}
	}	
		for (var i = 0; i<select.length; i++) {
			if(select[i].value !== "0"){
				removeClass("err", select[i]);
			}
			else{
				addClass("err", select[i]);
				valid = false;
			}
		
	}
		var mainErr = errorMsg("У вашій формі виявлені помилки","warning","warning");
		if(!valid && (typeof warMsg == "undefined")){				
			warMsg = form.parentNode.insertBefore(mainErr,form);
		}
		else if(valid && (typeof warMsg !== "undefined")){
			form.parentNode.removeChild(document.getElementById("warning"));
			
		}
		return valid;
	

	
	
		}
	}
}