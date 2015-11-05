/**
 * Check or uncheck publish checkbox to set active or inactive for object
 * @param {[string]} controller name of controller
 * @param {[string]} id         object id
 * @param {[type]} object     current object that is being cliked
 */
function setActive (controller, id, object) {
	var id = $(object).attr('data-id');
    var active = $(object).prop('checked') ? 1 : 0;
    var dataString = 'id='+id+'&active='+active;
    $.ajax({
        type: "POST",
        url : window.location.protocol + "//" + window.location.host + "/" + window.location.pathname + "/set_active_status",
        data : dataString,
        success : function(data){
        }
    },"json");
}

/**
 * Delete selected row in table
 * @param {[string]} controller name of controller
 * @param {[string]} id         object id
 * @param {[type]} object     current object that is being cliked
 */
function deleteRow (controller, id, object) {
	var row = $(object).parents('tr');
	var url = '/administrator/'+controller+'/'+id;

	$.ajax({
        type: "POST",
        url : window.location.protocol + "//" + window.location.host + "/" + window.location.pathname + "/" + id,
        data: {_method: 'delete', id :id},
        beforeSend: function() {
			row.css('background', '#fcf5a3');
		},
        success : function(data){
        	row.slideUp(300,function() {
				row.remove();
			});
        }
    },"json");
}