jQuery(function() {
    
    /*===============================================
    	Mobile menu
    ==================================================*/
    jQuery('.menu-icon').click( function(e) {        
        e.preventDefault(); 
        e.stopPropagation(); 
        jQuery(".main-menu").toggleClass("active");        
    });    
    jQuery('.menu-icon').click( function(e) {        
        e.stopPropagation();      
    });    
    jQuery('body').click( function() {       
        jQuery(".main-menu").removeClass("active");        
    });

	 /*===============================================
    	Slick slider
    ==================================================*/
    if (jQuery.fn.slick) {
        jQuery(".banner-slider").slick({
            dots: false,
            arrows: true,
            autoplay: true,
            infinite: true,
            draggable: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            speed: 3000
        });
        /* jQuery(".logo-slider").slick({
            dots: false,
            arrows: true,
            autoplay: false,
            infinite: true,
            draggable: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        }); */
    }

    /*===============================================
    	Scroll to
    ==================================================*/
    jQuery(".scrollto").click(function(event) {
        event.preventDefault(); 
        var defaultAnchorOffset = 0;
        var anchor = jQuery(this).attr('data-attr-scroll');                
        var anchorOffset = jQuery('#'+anchor).attr('data-scroll-offset');
        if (!anchorOffset)
            anchorOffset = defaultAnchorOffset; 
            jQuery('html,body').animate({ 
            scrollTop: jQuery('#'+anchor).offset().top - anchorOffset
        }, 500);        
    });

    
    /*===============================================
    	AOS
    ==================================================*/
    AOS.init();


    /*===============================================
    	Gmap
    ==================================================*/
    if (jQuery('#map-canvas').length) {
		var map = new google.maps.Map(document.getElementById('map-canvas'), {
			zoom: 14,
			center: new google.maps.LatLng(25.34592507409814, 55.48572998806931),
			disableDefaultUI: true,
			draggable: true,
			zoomControl: false,
			scrollwheel: false,
			disableDoubleClickZoom: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
		});

		var customMarker = '../assets/images/marker.png';
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(25.34592507409814, 55.48572998806931),
			icon: customMarker,
			map: map,
			title: 'Gulf Gold Refinery.'
		})
	}

});

