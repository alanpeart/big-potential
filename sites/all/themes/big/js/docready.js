(function ($) {$(document).ready(function() { 
	if($('.node-diagnostic-form').length > 0) {
		$('#j1s1').click(function(){ 
			$('.multipage-panes > div').each(function() {
				$(this).hide();
			});
			$('.group-step0-questionnaire').show(); 
			$('#diagnostic-nav li a').each(function() {
				$(this).removeClass('active');
			});
			$(this).addClass('active');
		});
		$('#j1s3').click(function(){ 
			$('.multipage-panes > div').each(function() {
				$(this).hide();
			});
			$('.group-step2-organisation').show(); 
			$('#diagnostic-nav li a').each(function() {
				$(this).removeClass('active');
			});
			$(this).addClass('active');
		});		
		$('#j1s4').click(function(){ 
			$('.multipage-panes > div').each(function() {
				$(this).hide();
			});
			$('.group-step3-financial').show(); 
			$('#diagnostic-nav li a').each(function() {
				$(this).removeClass('active');
			});
			$(this).addClass('active');
		});	
		$('#j1s5').click(function(){ 
			$('.multipage-panes > div').each(function() {
				$(this).hide();
			});
			$('.group-step4-people').show(); 
			$('#diagnostic-nav li a').each(function() {
				$(this).removeClass('active');
			});
			$(this).addClass('active');
		});		
		$('#j1s6').click(function(){ 
			$('.multipage-panes > div').each(function() {
				$(this).hide();
			});
			$('.group-step5-whatyoudo').show(); 
			$('#diagnostic-nav li a').each(function() {
				$(this).removeClass('active');
			});
			$(this).addClass('active');
		});	
		$('#j1s7').click(function(){ 
			$('.multipage-panes > div').each(function() {
				$(this).hide();
			});
			$('.group-step6-howyoudo').show(); 
			$('#diagnostic-nav li a').each(function() {
				$(this).removeClass('active');
			});
			$(this).addClass('active');
		});	
		$('#j1s8').click(function(){ 
			$('.multipage-panes > div').each(function() {
				$(this).hide();
			});
			$('.group-step7-finances').show(); 
			$('#diagnostic-nav li a').each(function() {
				$(this).removeClass('active');
			});
			$(this).addClass('active');
		});	
		$('#j1s9').click(function(){ 
			$('.multipage-panes > div').each(function() {
				$(this).hide();
			});
			$('.group-step8-report').show(); 
			$('#diagnostic-nav li a').each(function() {
				$(this).removeClass('active');
			});
			$(this).addClass('active');
		});			
		
		/*
		* Building manual navigation
		*/
		$('.group-step0-questionnaire .multipage-link-next').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-organisation a').addClass('active');
		});	
		$('.group-step2-organisation .multipage-link-next').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-financials a').addClass('active');
		});
		$('.group-step2-organisation .multipage-link-previous').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-survey a').addClass('active');
		});
		$('.group-step3-financial .multipage-link-next').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-people a').addClass('active');
		});
		$('.group-step3-financial .multipage-link-previous').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-organisation a').addClass('active');
		});	
		$('.group-step4-people .multipage-link-next').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-whatyoudo a').addClass('active');
		});
		$('.group-step4-people .multipage-link-previous').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-financials a').addClass('active');
		});	
		$('.group-step5-whatyoudo .multipage-link-next').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-howyoudo a').addClass('active');
		});
		$('.group-step5-whatyoudo .multipage-link-previous').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-people a').addClass('active');
		});		
		$('.group-step6-howyoudo .multipage-link-next').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-finances a').addClass('active');
		});
		$('.group-step6-howyoudo .multipage-link-previous').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-whatyoudo a').addClass('active');
		});	
		$('.group-step7-finances .multipage-link-next').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-report a').addClass('active');
		});
		$('.group-step7-finances .multipage-link-previous').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-howyoudo a').addClass('active');
		});	
		$('.group-step8-report .multipage-link-previous').click(function(){  
			$('.jumplist li a').each(function() {
				$(this).removeClass('active');
			});
			$('.jumplist li.step-finances a').addClass('active');
		});		
		$('#edit-actions #edit-delete').after($('#edit-actions #edit-submit'));
	}	

	if($('#edit-submit-resources').length) {
		$.cookie('resource-search', location.search);
	}
	if($('#edit-submit-providers-directory').length) {
		$.cookie('provider-search', location.search);
	}
	
	$('input').iCheck({
		checkboxClass: 'icheckbox_square',
		radioClass: 'iradio_square',
		increaseArea: '20%' // optional
	});	
	var twitOptions = {
		"url": "sites/all/themes/big/css/twitter.css"
	};
	CustomizeTwitterWidget(twitOptions);	
});})(jQuery);