var ArrayObject = {
	init: function () {
		this.array = [];
		this.array.push("31", "32", "134", "421", 32, 10, "String");
		console.log(this.array); //["31", "32", "134", "421", 32, 10, "String"]

 		this.array.pop();
 		console.log(this.array); //["31", "32", "134", "421", 32, 10]

 		this.array.unshift("at begining");
 		console.log(this.array); //["at begining", "31", "32", "134", "421", 32, 10] 

 		this.array.shift(); 
 		console.log(this.array); //["31", "32", "134", "421", 32, 10] 

 		this.arrStringJoin = this.array.join();
 		console.log(this.arrStringJoin); //31 32 134 421 32 10 

 		this.arrString = this.array.toString();
 		console.log(this.arrString); //31 32 134 421 32 10 
 		console.log(this.arrStringJoin == this.arrString) //true

 		this.array.sort(function(a, b){
 			return a - b;
 		});
 		console.log(this.array); // [10, "31", "32", 32, "134", "421"]

 		this.string = "I'm a string but I want be an Array";
 		this.arrFromString = this.string.split(" ");
 		console.log(this.arrFromString); // ["I'm", "a", "string", "but", "I", "want", "be", "an", "Array"] 

 		this.twoArrays = this.array.concat(this.arrFromString);
 		console.log(this.twoArrays);// [10, "31", "32", 32, "134", "421", "I'm", "a", "string", "but", "I", "want", "be", "an", "Array"] 

 		this.twoArrays.reverse();
 		console.log(this.twoArrays); //["Array", "an", "be", "want", "I", "but", "string", "a", "I'm", "421", "134", 32, "32", "31", 10]
	}

}

$(document).ready(function() {
   ArrayObject.init();
});