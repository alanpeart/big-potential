(function ($) {$(document).ready(function() { 
	if($('#edit-submit-resources').length) {
		$.cookie('resource-search', location.search);
	}
	if($('#edit-submit-providers-directory').length) {
		$.cookie('provider-search', location.search);
	}	
});})(jQuery);