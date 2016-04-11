document.addEventListener("DOMContentLoaded", function(event) {
	/*
	let's add the checker which makes dealing with checkboxes easier
	<input type="checkbox" name="exp" class="checkers" data-real="exp" data-checked="1" data-unchecked="0" checked>
	*/
	$('.checkers').each(function(){
		$(this).after('<input name="'+$(this).data('real')+'" value="'+(($(this).is(':checked')) ? $(this).data('checked') : $(this).data('unchecked'))+'" style="display:none">').click(function() {
			$('[name="'+$(this).data('real')+'"]').val((($(this).is(':checked')) ? $(this).data('checked') : $(this).data('unchecked')));
		});
	});
});
