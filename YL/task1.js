var Values = {
	init: function () {
		$("body").append($("<input>", { "id":"inpt", "value": "John", "data-foo": "bar" }));
		$("body").append($("<div>", { "id": "btn", "class": "btn", "text": "Show Values"}));
		this.bindEvents();
	},
	bindEvents: function() {
		var self = this;
		$("#btn").on("click", function(){
			self.showValues();
		});
	},
	showValues: function(){
		console.log( $("#inpt").val()+ "  // .val() " );
		console.log( $("#inpt").attr("value") + "  // .attr('value') " );
		console.log( $("#inpt").prop("value")+ "  // .prop('value') " );
		console.log( $("#inpt").data("foo") + "  // data('foo') " );
		console.log( $("#inpt").attr("data-foo") + "  // attr('data-foo') " );
		console.log( $("#inpt").prop("data-foo") + "  // prop('data-foo') " );
	}
}

$(document).ready(function() {
   Values.init();
});