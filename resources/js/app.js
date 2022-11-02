require('./bootstrap');
import './utils/intTelInput';
import './utils/slick';
import './utils/wavesclick';

$(document).ready(function(){   
    
    //BACK-TOP
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


    //CERRAR MENU AL DAR CLICK MOVIL
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
  

    //ACTIVAR MENU FIXED
    var menu = document.getElementById('menuscroll');
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

    /* acordeon body chage icon close*/
    $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
        $(e.target)
            .prev()
            .find("i:last-child")
            .toggleClass("fa-minus fa-plus");
            //console.log(e.target);
    });

});