$(document).ready(function(){

    $('.owl-carousel').owlCarousel({                // slider
        margin:10,
        dots:false,
        navText: ['<img src="img/bl-arr.png" >', '<img src="img/br-arr.png" >'],
        nav:true,
        loop:true,
        dotsEach: 1,
        responsiveClass:true,
		    responsive:{
            0:{ items:1 },
            580:{ items:1 },
            1020:{ items:3 },
            1200:{ items:3 },
            1500:{ items:3 }
                 
    }
    });

    $('.btn-call, .btn-price').click(function(){
        $('.fon-pop').show(300);
    });
    $('.close').click(function(){
        $('.fon-pop').hide(300);
    });
    
    $('.userphone').inputmask({"mask": "+7(999) 999-99-99"}); //маска телефона

    $('.form-bell').each(function(){               
          
        $(this).validate({                                   
          errorPlacement: function(error, element) {
            return true;
        },
          rules: {
            dow:{
              required: true,
              },
              userphone:{
                required: true,
                },
            }, 
          submitHandler(form) {
            let th = $(form);
    
            $.ajax({
              type: 'POST',
              url: 'order.php',
              data: th.serialize(),
              
            }).done(() => {
              
              th.trigger('reset');
             $(".fon-pop").css('display' , 'none');
                          
            alert("Спасибо! Ваше сообщение успешно отправлено.   Мы свяжемся с Вами в длижайшее время. Проследите, пожалуйста, за доступностью Ваших средств связи.")
              
            });
    
            return false;
          }
        });
    });


}); // end scripts