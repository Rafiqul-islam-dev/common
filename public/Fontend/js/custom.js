$(document).ready(function() {

    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        prevArrow: '.right',
        nextArrow: '.left',
        autoplaySpeed: 3000,
        speed: 1000,
    });



    new WOW().init()


    var html_body = $('html, body');
    $('.collapse a').on('click', function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                html_body.animate({
                    scrollTop: target.offset().top - 0
                }, 1500);
                return false;
            }
        }
    });
    //back to top 
   
    var back2top = $(".back-to-top");
    var html_body = $('html, body');
    back2top.click(function(){
        html_body.animate({scrollTop:0},1500);
  })

  $(window).scroll(function(){
    var scrolling = $(this).scrollTop();
    if(scrolling > 700){
        back2top.fadeIn(500);
    }
    else{
        back2top.fadeOut(500);
    }
}); 

    $(window).scroll(function() {
        var scrolling = $(this).scrollTop();
        if (scrolling > 200) {

            $(".about-navbar").addClass("bg");
        } else {

            $(".about-navbar").removeClass("bg");
        }
    })

    $(window).scroll(function() {
        var scrolling = $(this).scrollTop();
        if (scrolling > 100) {

            $("#headerSticky").addClass("bg2");
        } else {

            $("#headerSticky").removeClass("bg2");
        }
    })

    $('.venobox').venobox(); 

    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.toggle').toggleClass('togleActive')
            $('.overlaytog').toggleClass('togleActive')
            
        })
    })


//DropdownMenu

        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;
    
            // Variables privadas
            var links = this.el.find('.link');
            // Evento
            links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
        }
    
        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
                $this = $(this),
                $next = $this.next();
    
            $next.slideToggle();
            $this.parent().toggleClass('open');
    
            if (!e.data.multiple) {
                $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
            };
        }	
    
        var accordion = new Accordion($('#accordion'), false);
});