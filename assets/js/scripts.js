$(document).ready(function() {
	var lastScrollTop = 0,
		navbar = $('#masthead');
	$('.banner-swiper').each(function() {
		var $this = $(this),
			$unique_id = '#'+$this.attr('id');
		console.log('Found = '+$unique_id);
		new Swiper($unique_id, {
			slidesPerView: 1,
			loop: true,
			autoplay: {
				delay: 8000,
				disableOnInteraction: false,
			},
			pagination: {
				el: $unique_id+' .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: $unique_id+' .nav-next',
				prevEl: $unique_id+' .nav-prev',
			},
			breakpoints: {
				0: {
					gap: 25,
				},
				768: {
					gap: 30,
				}
			}
		});
	});

    mobileResponsiveDetection();
    $(window).on('resize', mobileResponsiveDetection);
    function mobileResponsiveDetection() {
        if( window.matchMedia("(max-width: 767px)").matches ) {
            
        }
        else {
            
        }
    }

    $(document).on('click', '#masthead .navbar-collapse.show .navbar-close', function(e) {
		e.preventDefault();
		var $this = $(this);
        $('#masthead .navbar-collapse').removeClass('show');
	});

    $(document).on('click', '#back-to-top', function(e) {
        e.preventDefault();
		$('html, body').stop().animate({ scrollTop: 0 }, 750);
    });

    $(document).on('click', function(e) {
        var $target = $(e.target);
        // Check if .navbar-collapse has class 'show'
        if ($('.navbar-collapse').hasClass('show')) {
            // If the click is NOT inside .navbar-collapse-inner or the close button
            if ( !$target.closest('.navbar-collapse-inner').length &&
                !$target.closest('#masthead .navbar-nav .navbar-close').length ) {
                $('.navbar-collapse').removeClass('show');
            }
        }
    });

	$('.table-of-contents a').each(function() {
		var currentUrl = window.location.origin + window.location.pathname;
        var sectionId = $(this).attr('href');
		var newHref = currentUrl + sectionId;
		var $this = $(this);
		$this.attr('href', newHref);
		$this.on('click', function(e){
			e.preventDefault();
			var section = $(sectionId);
			if (section.length) {
				$('html, body').animate({
					scrollTop: section.offset().top - 65
				}, 800);
				history.pushState(null, '', newHref);
			}
		});
	});

    var hash = window.location.hash;
    if (hash) {
        var section = $(hash);
        if (section.length) {
            setTimeout(function() {
                $('html, body').animate({
                    scrollTop: section.offset().top - 65
                }, 800);
            }, 250);
        }
    }

    var $back2top = $('.back2top');
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $back2top.fadeIn();
        } else {
            $back2top.fadeOut();
        }
    });

    $back2top.click(function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 600);
    });
});