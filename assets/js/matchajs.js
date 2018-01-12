(function($){

	/*--------------------------------------------------------------
								Menu Toggle
	--------------------------------------------------------------*/
	var body, masthead, menuToggle, siteNavigation, siteHeaderMenu;

	masthead         = $( '#masthead' );
	menuToggle       = masthead.find( '#menuToggle' );
	matchaheaderToggleJS       = masthead.find( '#matchaheaderToggleJS' );
	siteHeaderMenu   = masthead.find( '#siteMenu' );
	siteNavigation   = masthead.find( '#site-navigation' );

	(function(){
		if( !menuToggle.length)
		{
			return;
		}
		//menuToggle.add( siteHeaderMenu ).attr( 'aria-expanded', 'false' );
		menuToggle.on('click', function()
			{
				console.log('rasel');
				siteHeaderMenu.toggleClass( 'toggled-on' );
				$( this ).toggleClass( 'toggled-on' );
				if ( $( this, siteHeaderMenu ).hasClass( 'toggled-on' ) )
				 {
					$( this ).attr( 'aria-expanded', 'true' );
					siteHeaderMenu.attr( 'aria-expanded', 'true' );
				} 
				else 
				{
					$( this ).attr( 'aria-expanded', 'false' );
					siteHeaderMenu.attr( 'aria-expanded', 'false' );
				}
			});
	})();

	frontPageButtonPanel         = $( '.frontPageButtonPanel' );
	matchaheaderToggleJS       = frontPageButtonPanel.find( '#matchaheaderToggleJS' );
	frontMenu   = frontPageButtonPanel.find( '#frontMenu' );
	matchasiteNavigation   = frontPageButtonPanel.find( '#site-navigation' );
	(function(){
		if( !matchaheaderToggleJS.length)
		{
			return;
		}
		//menuToggle.add( siteHeaderMenu ).attr( 'aria-expanded', 'false' );
		matchaheaderToggleJS.on('click', function()
			{
				frontMenu.toggleClass( 'toggled-on' );
				$( this ).toggleClass( 'toggled-on' );
				if ( $( this, frontMenu ).hasClass( 'toggled-on' ) )
				 {
					$( this ).attr( 'aria-expanded', 'true' );
					frontMenu.attr( 'aria-expanded', 'true' );
					frontMenu.css( 'position', 'absolute' );
				} 
				else 
				{
					$( this ).attr( 'aria-expanded', 'false' );
					frontMenu.attr( 'aria-expanded', 'false' );
					frontMenu.css( 'position', 'relative' );
				}
			});
	})();



	function onResizeARIA() {
	
			if ( menuToggle.hasClass( 'toggled-on' ) ) {
				menuToggle.attr( 'aria-expanded', 'true' );
			} else {
				menuToggle.attr( 'aria-expanded', 'false' );
			}

			if ( siteHeaderMenu.hasClass( 'toggled-on' ) ) {
				siteNavigation.attr( 'aria-expanded', 'true' );
			} else {
				siteNavigation.attr( 'aria-expanded', 'false' );
			}

			menuToggle.attr( 'aria-controls', 'site-navigation ' );
	
	}

	$( document ).ready( function() {
		body = $( document.body );

		$( window )
			.on( 'load', function() {
				onResizeARIA();
			} );
	} );


	/*--------------------------------------------------------------
								Accordion
--------------------------------------------------------------*/ 
	
	var accordion =$('.accordion');
	accordion.find('dd').not(':first').hide();
	//accordion.find('dd:first').show();
	accordion.find('dt').on('click', function(){
	$(this).next('dd').slideToggle().siblings('dd:visible').slideUp();
	return false;
	});

	/*--------------------------------------------------------------
			Product Page Display product
	--------------------------------------------------------------*/
	$('.productImageLoader li img').on('click', function() {
    var loc = $(this).attr("src");
    $('.productMiddlePanel .productLargeImage').find('img').attr("src",loc);
	});


	
	/*--------------------------------------------------------------
					Front Page Product Layout
--------------------------------------------------------------*/
	$( ".productLayout" ).mouseenter(function() {
			function productFadeOUT() {
    			$(this).css('display','none');
    			var postId=$(this).data("post_id");
    			$( '.productBrief[data-post_id="'+postId+'"]').fadeIn(500);
    			$( '.productBrief[data-post_id="'+postId+'"]').css('display','block');
    			
  			}
			$(this).fadeOut( 500, "linear", productFadeOUT );
			//$(this).css('display','none');
	  		
		
	});
	$( ".productBrief" ).mouseleave(function() {
			function BriefFadeOUT() {
    			$(this).css('display','none');
    			var postId=$(this).data("post_id");
    			$( '.productLayout[data-post_id="'+postId+'"]').fadeIn(500);
    			$( '.productLayout[data-post_id="'+postId+'"]').css('display','block');
    			
  			}
  			$(this).fadeOut( 500, "linear", BriefFadeOUT);
			//var stopBtnId=$(this).data("post_id");
			//$(this).css('display','none');
	  		//$( '.productLayout[data-post_id="'+stopBtnId+'"]').css('display','block');
	  	
	});
	

} )( jQuery );