var DateObject = {
	init: function () {
		$("body").append($("<div>", { "id": "btn", "class": "btn", "text": "Show Date methods"}));

		this.bindEvents();
	},
	bindEvents: function() {
		var self = this;
		$("#btn").on("click", function(){
			self.showDateMethods();
		});
	},
	showDateMethods: function() {
		var date = new Date();
		console.log(date + "   //new Date()");
		console.log(date.getDay() + "   //new Date().getDay()");
		console.log(date.getFullYear() + "   //new Date().getFullYear()");
		console.log(date.getHours() + "   //new Date().getHours()");
		console.log(date.getMilliseconds() + "   //new Date().getMilliseconds()");
		console.log(date.getMinutes() + "   //new Date().getMinutes()");
		console.log(date.getMonth() + "   //new Date().getMonth()");
		console.log(date.getSeconds() + "   //new Date().getSeconds()");
		console.log(date.getTime() + "   //new Date().getTime()");
		console.log(date.getTimezoneOffset() + "   //new Date().getTimezoneOffset()");
		console.log(date.getYear() + "   //new Date().getYear()");
		console.log(date.toLocaleString() + "   //new Date().toLocaleString()");
	}
}

$(document).ready(function() {
   DateObject.init();
});