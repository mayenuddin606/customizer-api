(function($){

	$(document).ready(function(){

		//edit copyright text========
		wp.customize('copyright-text', function(value){
			value.bind(function(to){
				$('h2.copyright-text').text(to);
			});
			
		});

		//copyright text color===========
		wp.customize('copyright-color', function(value){
			value.bind(function(to){
				$('h2.copyright-text').css('color', to);
			});
		});

		//show copyright text==========
		wp.customize('copyright-show', function(value){
			value.bind(function(to){
				false === to ? $('h2.copyright-text').hide() : $('h2.copyright-text').show();
			});
		});

		//select heroine==========
		wp.customize('select-heroine', function(value){
			value.bind(function(to){
				$('h2.heroine').text('Select Heroine: ' + to);
			});
		});

	});

})(jQuery);
