require('./bootstrap');
import 'slick-carousel';
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

$(document).ready(function(){
    //testimonios;
    $('.slider-testimonios').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 780,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              dots: true
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
    });

    //slider clientes
    //alert('iniciados');
    $('.slider-clientes').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 780,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: true
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  });
    
    //back-Top
    $(function(){
      $(window).scroll (function(){
        var scrolltop=$(this).scrollTop();
        if(scrolltop>=60){
            $(".back-top").fadeIn();
        }else{
        $(".back-top").fadeOut();
        }

      });
    });

    //efect waves click
    var waves = (function($) {

        var particle = '.particle';
        var template = '<span class="particle"></span>';
        var element = '.waves';

        $('body').delegate(element, 'click', animate);

        function animate(e) {
            var $this = $(this);

            $this.find(particle).remove();

            var width = $this.width() * 3;
            var height = $this.height() * 3;
            var posX = $this.offset().left;
            var posY = $this.offset().top;

            $this.prepend(template);

            if (width >= height)
                height = width;
            else
                width = height;

            var x = e.pageX - posX - width / 2;
            var y = e.pageY - posY - height / 2;

            $this.find(particle).css({
                width: width,
                height: height,
                top: y + 'px',
                left: x + 'px'
            }).addClass('animation');
        }

    })(jQuery);

      //cerrar el menu a hace click
    var listMenus = $('#navbarSupportedContent'),
    navbarToggler = jQuery('.navbar-toggler');
    $('.navbar').on('click','a.nav-link', function (e) {
        var currentSelect = $(this);
        listMenus.find('li').removeClass('active');

        if(currentSelect.length){
            currentSelect.closest('li').addClass('active');

            if(!navbarToggler.hasClass('collapsed'))
                navbarToggler.trigger('click');

            // var itemSection = $(currentSelect[0].hash);

            // if(itemSection.length){
            //     // console.log(itemSection.offset());
            //      $('html, body').animate({
            //         scrollTop: (itemSection.offset().top - 60)
            //     }, 2000);
            // }
        }

    });
  
  var menu=document.getElementById('menuscroll');

    if(menu){
        var altura = menu.offsetTop;

        window.addEventListener('scroll',function(){
            if(window.pageYOffset > altura){
                menu.classList.add('menufixed');
            }else{
                menu.classList.remove('menufixed');
            }
        })
    }


});