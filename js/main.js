$(function($) {

    "use strict";
    
    let wheight = $(window).height(); //get the height of the window
    $("#headImg").css('height', wheight); //set to window tallness  

    $(window).resize(function() {
        wheight = $(window).height();
        $("#headImg").css('height', wheight); //set to window tallness  
    });
    
    let topoffset = 50; //variable for menu height

    // Collapse Navbar
    let changeNavbar = function() {
        if ($(".navbar").offset().top > wheight-(topoffset*2)) {
            $(".navbar").addClass("navbar-below");
        } else {
            $(".navbar").removeClass("navbar-below");
        }
    };

    changeNavbar();
    $(window).scroll(changeNavbar);

    $('.scrolling').click(function() {
        $('.navbar-collapse').collapse('hide');
      });

    //Use smooth scrolling when clicking on navigation
    $('a.scrolling[href*=\\#]:not([href=\\#])').click(function() {
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && 
         location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                    scrollTop: target.offset().top-topoffset+2
                    }, 500);
                    return false;
                } //target.length
        } //click function
    }); //smooth scrolling

});