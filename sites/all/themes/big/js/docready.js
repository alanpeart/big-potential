(function ($) {$(document).ready(function() { 

	$('#search-api-page-search-form-search button').on('click',function(e){
	if( !$('#search-api-page-search-form-search .form-type-textfield input').hasClass('expanded') )
	{
	e.preventDefault();
	}
	})
	
	$('#search-api-page-search-form-search button').on('click',function(){
        $('#search-api-page-search-form-search .form-type-textfield input').animate({'width':'200px','left':'-200px'});
		$('#search-api-page-search-form-search .form-type-textfield input').addClass('expanded');
        $('#search-api-page-search-form-search .form-type-textfield input').focus();
    });
	
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
			$('.jumplist li.step-financial a').addClass('active');
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
			$('.jumplist li.step-survey a').addClass('active');
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
		// Check if we've got a direct link to a step
		var hash = window.location.hash;
		if(hash) {
			$(hash).click();
		}
	}	
	$(".sliderfield-container").bind("slide", function() {
		var slider = $(this).parents('.sliderfield');
		var field = $(this).parents('.sliderfield').parents('.form-type-slider');
        var value = Math.round((slider.find('.sliderfield-value-field').val() - 0)/10);
		var stages = field.find('.slider-stages');
		var blink = field.find('.slider-blink');
		var chunk = 25;
		if(stages.hasClass('triple')) {
			chunk = 33;
		}
		if(value < chunk) {
			$(blink).find("li.one").addClass("active");
			$(blink).find("li.two").removeClass("active");
			$(blink).find("li.three").removeClass("active");
			$(blink).find("li.four").removeClass("active");
			$(stages).find("li:eq(0)").addClass("active");
			$(stages).find("li:eq(1)").removeClass("active");
			$(stages).find("li:eq(2)").removeClass("active");
			$(stages).find("li:eq(3)").removeClass("active");			
		}
		else if(value < (chunk * 2)) {
			$(blink).find("li.one").removeClass("active");
			$(blink).find("li.two").addClass("active");
			$(blink).find("li.three").removeClass("active");
			$(blink).find("li.four").removeClass("active");
			$(stages).find("li:eq(0)").removeClass("active");
			$(stages).find("li:eq(1)").addClass("active");
			$(stages).find("li:eq(2)").removeClass("active");
			$(stages).find("li:eq(3)").removeClass("active");			
		}
		else if(value <= (chunk * 3)) {
			$(blink).find("li.one").removeClass("active");
			$(blink).find("li.two").removeClass("active");
			$(blink).find("li.three").addClass("active");
			$(blink).find("li.four").removeClass("active");
			$(stages).find("li:eq(0)").removeClass("active");
			$(stages).find("li:eq(1)").removeClass("active");
			$(stages).find("li:eq(2)").addClass("active");
			$(stages).find("li:eq(3)").removeClass("active");			
		}	
		else if(chunk == 25) {
			$(blink).find("li.one").removeClass("active");
			$(blink).find("li.two").removeClass("active");
			$(blink).find("li.three").removeClass("active");
			$(blink).find("li.four").addClass("active");
			$(stages).find("li:eq(0)").removeClass("active");
			$(stages).find("li:eq(1)").removeClass("active");
			$(stages).find("li:eq(2)").removeClass("active");
			$(stages).find("li:eq(3)").addClass("active");			
		}
	});
	// Trigger all the sliderfields to have the right classes
	$(".sliderfield-container").trigger('slide');

	if($('#edit-submit-resources').length) {
		$.cookie('resource-search', location.search);
	}
	if($('#edit-submit-providers-directory').length) {
		$.cookie('provider-search', location.search);
	}
	$('.multipage-link-next').val('Next');
	$('.multipage-link-previous').val('Back');
	
	$("input:not('.vertical-tabs input')").iCheck({
		checkboxClass: 'icheckbox_square',
		radioClass: 'iradio_square',
		increaseArea: '20%' // optional
	});	
	var twitOptions = {
		"url": "sites/all/themes/big/css/twitter.css"
	};
	CustomizeTwitterWidget(twitOptions);	
});})(jQuery);