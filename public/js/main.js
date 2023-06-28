(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

    function active_course() {
        if ($(".active_course").length) {
          $(".active_course").owlCarousel({
            loop: true,
            margin: 20,
            items: 3,
            nav: false,
            autoplay: 2500,
            smartSpeed: 1500,
            dots: false,
            responsiveClass: true,
            thumbs: true,
            thumbsPrerendered: true,
            responsive: {
              0: {
                items: 1,
                margin: 0,
              },
              991: {
                items: 2,
                margin: 30,
              },
              1200: {
                items: 3,
                margin: 30,
              },
            },
          });
        }
      }
      active_course();
      function achievements() {
        if ($(".achievements").length) {
          $(".achievements").owlCarousel({
            loop: true,
            margin: 20,
            items: 3,
            nav: false,
            autoplay: 2500,
            smartSpeed: 1500,
            dots: true,
            responsiveClass: true,
            thumbs: true,
            thumbsPrerendered: true,
            responsive: {
              0: {
                items: 1,
                margin: 0,
              },
              991: {
                items: 2,
                margin: 30,
              },
              1200: {
                items: 4,
                margin: 30,
              },
            },
          });
        }
      }
      achievements();
      
      $(".partners").owlCarousel({
        loop: true,
        margin: 10  ,
        items: 6,
        nav: false,
        autoplay: 200,
        smartSpeed: 1500,
        dots: true,
        responsive: {
          0: {
            items: 2
          },
          768: {
            items: 4
          },
          900: {
            items: 6
          }
        },
      });
    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        dots: false,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
  

    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });
    
})(jQuery);


// Nav Bar Function
let navButton = document.querySelector(".navbar-toggler");
let navList = document.querySelector("#navbarCollapse");
console.log(navButton);
console.log(navList);
navButton.onclick = () => {
  navList.classList.toggle("show-button");
}