function row_editor(){
var tabl = document.getElementById("addform");
if (!!tabl){
var inputs = tabl.getElementsByTagName("input");
}
if(!!inputs){
for(var i = 0; i<inputs.length-1; i++){
    var input = inputs[i];
    input.onfocus = function(){
       var row = this.parentNode.parentNode;
        addClass("active_row", row);
        
        }
    input.onblur = function(){
        var row = this.parentNode.parentNode;
        removeClass("active_row", row);
        
        }
    }
}
}
