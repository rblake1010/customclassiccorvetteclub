$(document).ready(function() {
    $('#friends').lightSlider({
        item:4,
        loop:false,
        slideMove:2,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        slideMargin:30,
        autoWidth: true,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    item:3,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:2,
                    slideMove:1
                  }
            }
        ]
    }); 




   $('.image').each(function(){
        var image = $(this);
        var t1 = new TimelineLite();
        $(image).hover(
            function(event){
                 event.stopPropagation();
                var nameBg = $(this).find('span');
                var name = $(this).find('span i'); 

                t1.to(nameBg, 0.5, {
                    width:'100%',
                    ease:Power2.easeOut
                })
                .to(name, 0.5, {opacity:1});
            },
            function(){
                t1.reverse(0);
            }
        );
 
    });



  });