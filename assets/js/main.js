$(function() {

    $(".section__carousel").slick({
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<button class='slick-prev-arrow slick-arrow'><span class='fas fa-chevron-left'></span></button>",
        nextArrow: "<button class='slick-next-arrow slick-arrow'><span class='fas fa-chevron-right'></span></button>",
        mobileFirst: true
    })

    $(".client__carousel").slick({
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
              }
            }
        ],
        slidesToScroll: 4,
        arrows: true,
        prevArrow: "<button class='slick-prev-arrow slick-arrow'><span class='fas fa-chevron-left'></span></button>",
        nextArrow: "<button class='slick-next-arrow slick-arrow'><span class='fas fa-chevron-right'></span></button>",
        mobileFirst: true
    })
})

jQuery("input.telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });

