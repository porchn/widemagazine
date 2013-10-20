/* Portfolio List. 
   Used: portfolio-2-columns.html, portfolio-3-columns.html, portfolio-4-columns.html, portfolio-left-sidebar.html, portfolio-right-sidebar.html  */
$(window).load(function(){	   
	var $container = $('#portfolio');		
	$container.isotope();	
	$('#portfolio-filter a').click(function(){			
		$('#portfolio-filter li').removeClass('active');
		$(this).parent('li').addClass('active');
		var selector = $(this).attr('data-filter');							
		$container.isotope({ filter: selector });
		return false;			
	});	
	$(window).resize(function() {								
		$container.isotope('reLayout');
	});	
});