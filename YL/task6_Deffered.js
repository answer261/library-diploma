var DefferedObject = {

	getTweets: function ( search ) {
		return $.ajax({
			url: "http://search.twitter.com/search.json?q=blue%20angels&rpp=5&include_entities=true&result_type=mixed",
			data: {q: search},
			dataType: "JSONP",
			success: function(data){
				console.log(data);
			}
		});
	}
}

$(document).ready(function() {
   DefferedObject.getTweets("Chicago Bulls");
});