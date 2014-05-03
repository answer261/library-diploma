$(document).ready(function(){
		submit = $("#button");
		login = $("#login");
		pass = $("#pass");
		$(submit).click(function(){
	
			if($(login).val().length == 0 || $(pass).val().length == 0){
				$(".error_msg").fadeIn(500);
				 setTimeout( "$('.error_msg').fadeOut(1000);",3000 );
				 return false;
				}
			else{ return true;
			}
	});
			
		});


	