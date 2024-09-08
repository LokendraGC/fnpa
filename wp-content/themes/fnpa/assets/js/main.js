(function ($) {
    'use strict';
    /*=============================================
	=              Preloader       =
    =============================================*/
    function preloader() {
        $('#preloader').delay(0).fadeOut();
    }
    /*=============================================
	=          Data Background      =
    =============================================*/
    function dataBackground() {
        $('[data-background]').each(function () {
            $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
        });
    }
    /*=============================================
	=           menu       =
    =============================================*/
    function menuMobi() {
        if ($('.tcmenu__wrap li.menu-item-has-children ul').length) {
            $('.tcmenu__wrap .navigation li.menu-item-has-children').append('<div class="dropdown-btn"><span class="plus-line"></span></div>');
        }
        //Mobile Nav Hide Show
        if ($('.tcmobile__menu').length) {
            var mobileMenuContent = $('.tcmenu__wrap .tcmenu__main-menu').html();
            $('.tcmobile__menu .tcmobile__menu-box .tcmobile__menu-outer').append(mobileMenuContent);
            //Dropdown Button
            $('.tcmobile__menu li.menu-item-has-children .dropdown-btn').on('click', function () {
                $(this).toggleClass('open');
                $(this).prev('ul').slideToggle(300);
            });
            //Menu Toggle Btn
            $('.mobile-nav-toggler').on('click', function () {
                $('body').addClass('mobile-menu-visible');
            });
            //Menu Toggle Btn
            $('.tcmobile__menu-backdrop, .tcmobile__menu .close-btn').on('click', function () {
                $('body').removeClass('mobile-menu-visible');
            });
        }
    }
    /*=============================================
	=           Go to top       =
    =============================================*/
    function progressPageLoad() {
        var progressWrap = document.querySelector('.btn-scroll-top');
        if (progressWrap != null) {
            var progressPath = document.querySelector('.btn-scroll-top path');
            var pathLength = progressPath.getTotalLength();
            var offset = 50;
            progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
            progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
            progressPath.style.strokeDashoffset = pathLength;
            progressPath.getBoundingClientRect();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
            window.addEventListener('scroll', function (event) {
                var scroll = document.body.scrollTop || document.documentElement.scrollTop;
                var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                var progress = pathLength - (scroll * pathLength) / height;
                progressPath.style.strokeDashoffset = progress;
                var scrollElementPos = document.body.scrollTop || document.documentElement.scrollTop;
                if (scrollElementPos >= offset) {
                    progressWrap.classList.add('active-progress');
                } else {
                    progressWrap.classList.remove('active-progress');
                }
            });
            progressWrap.addEventListener('click', function (e) {
                e.preventDefault();
                window.scroll({
                    top: 0,
                    left: 0,
                    behavior: 'smooth',
                });
            });
        }
    }
    /*=============================================
	=           Aos Active       =
    =============================================*/
    function aosAnimation() {
        AOS.init({
            duration: 1000,
            mirror: true,
            once: true,
            disable: 'mobile',
        });
    }
    /*=============================================
	=           counterState       =
    =============================================*/
    function counterState() {
        var counters = document.querySelectorAll('.counter');
        counters.forEach(function (counter) {
            var countTo = counter.getAttribute('data-count');
            var countNum = parseInt(counter.textContent);
            var duration = 4000;
            var stepDuration = duration / Math.abs(countTo - countNum);
            var increment = countTo > countNum ? 1 : -1;
            var timer = setInterval(function () {
                countNum += increment;
                counter.textContent = countNum;
                if (countNum == countTo) {
                    clearInterval(timer);
                    //alert('finished');
                }
            }, stepDuration);
        });
    }
    /*=============================================
	=    		Magnific Popup		      =
    =============================================*/
    function magnificPopup() {
        $('.popup-image').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true,
            },
        });
        /* magnificPopup video view */
        $('.popup-video').magnificPopup({
            type: 'iframe',
        });
    }
    /*=============================================
	=    		 Wow Active  	         =
    =============================================*/
    function wowAnimation() {
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true,
        });
        wow.init();
    }
    function customSwiper() {
        const slider1 = new Swiper('.slider-1', {
            slidesPerView: 3,
            spaceBetween: 10,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            autoplay: {
                delay: 4000,
            },
            autoplay: false,
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 2,
                },
                576: {
                    slidesPerView: 1,
                },
                0: {
                    slidesPerView: 1,
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                afterInit: function () {
                    // set padding left slide
                    var leftPadding = 0;
                    var swipperRoot = $('.swipper-root');
                    if (swipperRoot.length > 0) {
                        leftPadding = swipperRoot.offset().left;
                    }
                    if ($('.box-swiper-padding').length > 0) {
                        $('.box-swiper-padding').css('padding-left', leftPadding + 'px');
                    }
                },
            },
        });
        const slider2 = new Swiper('.slider-2', {
            slidesPerView: 4,
            spaceBetween: 30,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            autoplay: {
                delay: 4000,
            },
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 2,
                },
                576: {
                    slidesPerView: 1,
                },
                0: {
                    slidesPerView: 1,
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                afterInit: function () {
                    // set padding left slide
                    var leftPadding = 0;
                    var swipperRoot = $('.swipper-root');
                    if (swipperRoot.length > 0) {
                        leftPadding = swipperRoot.offset().left;
                    }
                },
            },
        });
        $(".slider-3").each(function () {
            const slider3 = new Swiper('.slider-3', {
                slidesPerView: 6,
                spaceBetween: 30,
                slidesPerGroup: 1,
                centeredSlides: false,
                loop: true,
                autoplay: {
                    delay: 4000,
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 6,
                    },
                    992: {
                        slidesPerView: 4,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    576: {
                        slidesPerView: 2,
                    },
                    0: {
                        slidesPerView: 2,
                    },
                },
                navigation: {
                    nextEl: '.swiper-button-next next-3',
                    prevEl: '.swiper-button-prev prev-3',
                },
            });
        });
        const slider4 = new Swiper('.slider-4', {
            slidesPerView: 4,
            spaceBetween: 30,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            autoplay: {
                delay: 4000,
            },
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                },
                992: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 2,
                },
                576: {
                    slidesPerView: 2,
                },
                0: {
                    slidesPerView: 2,
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                afterInit: function () {
                    // set padding left slide
                    var leftPadding = 0;
                    var swipperRoot = $('.swipper-root');
                    if (swipperRoot.length > 0) {
                        leftPadding = swipperRoot.offset().left;
                    }
                },
            },
        });
        const slider5 = new Swiper('.slider-5', {
            slidesPerView: 1,
            spaceBetween: 30,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            autoplay: {
                delay: 8000,
            },
            breakpoints: {
                1200: {
                    slidesPerView: 1,
                },
                992: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                576: {
                    slidesPerView: 1,
                },
                0: {
                    slidesPerView: 1,
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                afterInit: function () {
                    // set padding left slide
                    var leftPadding = 0;
                    var swipperRoot = $('.swipper-root');
                    if (swipperRoot.length > 0) {
                        leftPadding = swipperRoot.offset().left;
                    }
                },
            },
        });
        const slider_blog = new Swiper('.slider_blog', {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1,
            centeredSlides: false,
            loop: true,
            autoplay: {
                delay: 4000,
            },
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                992: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                576: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
            },
            navigation: {
                nextEl: '.btn-swp-next',
                prevEl: '.btn-swp-prev',
            },
            on: {
                afterInit: function () {
                    // set padding left slide
                    var leftPadding = 0;
                    var swipperRoot = $('.swipper-root');
                    if (swipperRoot.length > 0) {
                        leftPadding = swipperRoot.offset().left;
                    }
                    if ($('.box-swiper-padding').length > 0) {
                        $('.box-swiper-padding').css('padding-left', leftPadding + 'px');
                    }
                },
            },
        });
        $(".slider_home_3").each(function () {
            const slider_home_3 = new Swiper('.slider_home_3', {
                slidesPerView: 1,
                slidesPerGroup: 1,
                centeredSlides: false,
                loop: true,
                autoplay: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
        $(".slider_home_services").each(function () {
            const slider_home_services = new Swiper('.slider_home_services', {
                slidesPerView: 1,
                slidesPerGroup: 1,
                centeredSlides: false,
                loop: true,
                autoplay: true,
                navigation: {
                    nextEl: '.swp-btn-next',
                    prevEl: '.swp-btn-prev',
                },
            });
        });
    }
    function collapse() {
        var coll = document.getElementsByClassName("collapsible");
        var i;
        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
                content.style.borderBottom = "none";
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
                content.style.borderBottom = "1px solid var(--tc-theme-primary)";
            }
            });
        }
    }

    window.addEventListener('DOMContentLoaded', function() {
		var posts = document.querySelectorAll('.post');
	
		posts.forEach(function(post) {
			// Check height on page load
			if (post.scrollHeight > 200) {
				// Add "Read more..." link
				var moreLink = document.createElement('a');
				moreLink.setAttribute('class', 'more');
				moreLink.textContent = 'Read more...';
				post.appendChild(moreLink);
	
				moreLink.addEventListener('click', function(event) {
					event.preventDefault();
					post.classList.toggle('reveal');
	
					if (moreLink.style.display === 'inline' || moreLink.style.display === '') {
						moreLink.style.display = 'none';
					} else {
						moreLink.style.display = 'inline';
					}
				});
	
				post.addEventListener('click', function(event) {
					// Check if the click target is the "Read more" link
					if (!event.target.classList.contains('more')) {
						event.stopPropagation(); // Prevent event from bubbling up
					}
					
				});
			}
		});
	});

    // script.js
    document.addEventListener('DOMContentLoaded', () => {
        const members = document.querySelectorAll('.member');
        const filterInput = document.createElement('input');
        filterInput.type = 'text';
        filterInput.placeholder = 'Filter by designation';
        filterInput.className = 'filter-input';
        document.querySelector('.members-section').prepend(filterInput);

        filterInput.addEventListener('input', () => {
            const filterValue = filterInput.value.toLowerCase();
            members.forEach(member => {
                const designation = member.querySelector('.designation').textContent.toLowerCase();
                if (designation.includes(filterValue)) {
                    member.style.display = 'block';
                } else {
                    member.style.display = 'none';
                }
            });
        });
    });

    
    /*=============================================
	=           Page Load       =
    =============================================*/
    $(window).on('load', function () {
        preloader();
        menuMobi();
        progressPageLoad();
        dataBackground();
        aosAnimation();
        counterState();
        customSwiper();
        magnificPopup();
        wowAnimation();
        collapse();
    });
})(jQuery);
