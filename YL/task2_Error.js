var ErrorObject = {
	init: function () {
		$("body").append($("<div>", { "id": "btn", "class": "btn", "text": "Some danger thing"}));
		$("body").append($("<div>", { "id": "btn2", "class": "btn", "text": "One more danger thing"}));

		this.bindEvents();
	},
	bindEvents: function() {
		var self = this;
		$("#btn").on("click", function(){
			try {
				problem();
			} catch (error) {
				alert(error);
			}
		});

		$("#btn2").on("click", function(){
			try {
				self.createError();
			} catch (error) {
				console.log(error.message + "  // error.message");
				console.log(error.stack + "  // error.stack");
				console.log(error.name + "  // error.name");
			}
		});
	},
	createError: function() {
		throw new Error("Custom error message");
	}
}

$(document).ready(function() {
   ErrorObject.init();
});