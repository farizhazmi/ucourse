
function addParent(){
	console.log("masuk");
	var html = '<div class="form-group">'+
                  '<input type="text" name="parents[]" class="form-control" />'+
                  '<div><a href="#" id="btn-add-child">Add Child</a></div>'+
                '</div>';
    $('#container-materi').append(html);
}

function addChild(){
	var html = '<div class="form-group">'+
                  '<input type="text" name="childs[]" class="form-control" />'+
                '</div>';
    $('#container-materi').append(html);
}

$(document).ready(function(){
	
});