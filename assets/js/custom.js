$('.banner-carousel').owlCarousel({
    loop:false,
    margin:0,
    nav:true,
    dots:false,
    autoplay:true,
    responsiveClass:true,
      navText: [
        '<i class="fas fa-chevron-left"></i>',
        '<i class="fas fa-chevron-right"></i>'
    ],
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
$('.detail-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
});

$('.online-program').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    dots:false,
    responsiveClass:true,
    navText: [
        '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
        '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
    ],
    responsive:{
        100:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

$('.testimonial').owlCarousel({
    loop:false,
    autoplay:false,
    margin:10,
    nav:true,
    dots:true,
    responsiveClass:true,
    navText: [
        '<i class="fas fa-chevron-left"></i>',
        '<i class="fas fa-chevron-right"></i>'
    ],
    responsive:{
        0:{
            items:1,
            nav:false,
        },
        600:{
            items:1

        },
        1000:{
            items:1
        }
    }
});

    $('.mobile-toggle').click(function(){
        $('.sidebar').toggleClass('show');
});




var btn = $('#back-to-top');

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0});
});

$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });


    const login_wrap = document.getElementById('login-modal-wrap');

    var el = document.getElementById('signUp');
    if(el){
      el.addEventListener('click', () => {
        login_wrap.classList.add('right-panel-active');
      });
    }

    var elin = document.getElementById('signIn');
    if(elin){
      elin.addEventListener('click', () => {
        login_wrap.classList.remove('right-panel-active');
      });
    };
//cart sidebar script
    const cartOpen = document.getElementById('cart-side-toggle');
    const cartSidebar = document.getElementById('cart-sidebar');
    const cartclose = document.getElementById('close-cart-sidebar');
    const cartOverlay = document.querySelector('.card-sidebar-overlay');
    cartOpen.addEventListener('click', function(){
        cartSidebar.classList.add('active');
    cartOverlay.classList.add('active');
    });
    cartclose.addEventListener('click', function(){
      cartSidebar.classList.remove('active');
      cartOverlay.classList.remove('active');
    });
    cartOverlay.addEventListener('click', function(){
      cartSidebar.classList.remove('active');
      cartOverlay.classList.remove('active');
    });



    $(document).ready(function() {
            $('.minus').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });

var sync1 = $(".slider");
var sync2 = $(".navigation-thumbs");

var thumbnailItemClass = '.owl-item';

var slides = sync1.owlCarousel({
    video:true,
  startPosition: 12,
  items:1,
  loop:true,
  margin:10,
  autoplay:true,
  autoplayTimeout:6000,
  autoplayHoverPause:false,
  nav: true,
  dots: true,
  navText: [
        '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
        '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
    ],
}).on('changed.owl.carousel', syncPosition);

function syncPosition(el) {
  $owl_slider = $(this).data('owl.carousel');
  var loop = $owl_slider.options.loop;

  if(loop){
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    if(current < 0) {
        current = count;
    }
    if(current > count) {
        current = 0;
    }
  }else{
    var current = el.item.index;
  }

  var owl_thumbnail = sync2.data('owl.carousel');
  var itemClass = "." + owl_thumbnail.options.itemClass;


  var thumbnailCurrentItem = sync2
  .find(itemClass)
  .removeClass("synced")
  .eq(current);

  thumbnailCurrentItem.addClass('synced');

  if (!thumbnailCurrentItem.hasClass('active')) {
    var duration = 300;
    sync2.trigger('to.owl.carousel',[current, duration, true]);
  }   
}
var thumbs = sync2.owlCarousel({
  startPosition: 12,
  items:4,
  loop:false,
  margin:10,
  autoplay:false,
  nav: true,
  dots: false,
    navText: [
        '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
        '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
    ],
  onInitialized: function (e) {
    var thumbnailCurrentItem =  $(e.target).find(thumbnailItemClass).eq(this._current);
    thumbnailCurrentItem.addClass('synced');
  },
})
.on('click', thumbnailItemClass, function(e) {
    e.preventDefault();
    var duration = 300;
    var itemIndex =  $(e.target).parents(thumbnailItemClass).index();
    sync1.trigger('to.owl.carousel',[itemIndex, duration, true]);
}).on("changed.owl.carousel", function (el) {
  var number = el.item.index;
  $owl_slider = sync1.data('owl.carousel');
  $owl_slider.to(number, 100, true);
});



// CheckOut
$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
