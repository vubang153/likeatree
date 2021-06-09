var menu = {
    toggleButton: '.toggle-menu',
    menuName: '.menu',
    overlayName: '.overlay.menu',
    init: function() {
        this.toggleEvent();
        this.mobile.init();
        this.searchBar.init();
    },
    toggleEvent: function() {
        $(this.toggleButton).click(function(e) {
            e.preventDefault();
            menu.toggle();
        })
    },
    toggle: function() {
        $(".menu-wrapper, .overlay.menu").toggleClass('active');
    },
    mobile: {
        init: function() {
            this.toggleEvent();
        },
        toggleEvent: function() {
            $('.main-menu ._btns-mobile ._btn-mobile-search').click(function(e) {
                e.preventDefault();
                menu.mobile.toggle();
            });
        },
        toggle: function() {
            let mainMenuHeight = $('.main-menu').outerHeight();
            if ($('.search-form').hasClass('active')) {
                $('.search-form').css('top', 0);
            } else {
                $('.search-form').css('top', mainMenuHeight);
            }
            $('.search-form, .overlay.main-menu').toggleClass('active');
        }
    },
    searchBar: {
        init: function() {
            this.toggleEvent();
        },
        toggleEvent: function() {
            $('.toggle-search').click(function(e) {
                e.preventDefault();
                menu.searchBar.toggle();
            })
        },
        toggle: function() {
            $('.header-searchform').toggleClass('active');
        }
    }
}
var header = {
    init: function(){
        swiper = new Swiper(".main-slider", {
            pagination: {
              el: ".swiper-pagination",
          },
          loop: true,
      });
    },
}
var main = {
    init: function(){
        var swiper = new Swiper(".looking-for-slider", {
            spaceBetween: 30,
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
          },
          breakpoints: {
            480: {
              slidesPerView: 1,
              spaceBetween: 30
          },
          768: {
              slidesPerView: 2,
              spaceBetween: 30,
          },
          992: {
            slidesPerView: 3,
            spaceBetween: 30,
            }
         },
        });
        this.advisers.init();
        this.testimontials.init();
    },
    advisers: {
        init:function(){
            this.render();
        },
        render: function(){
            if ($(window).width()>= 992) {
                var height = $('.advisers__list').height();
                var titlesHeight = $('.advisers> ._titles').height();
                $('.advisers__list').height(height + (titlesHeight*4));
            }
        }
    },
    testimontials: {
        init: function() {
             this.slider.init();
        },
        slider: {
            init: function(){
                this.render();
                this.active();
            },
            render: function(){
                $('.testimontials__slider .testimontials__slide').first().addClass('active');
                $('.testimontials__slider ._navigation ._item').first().addClass('active');
            },
            active: function(){
                $('.testimontials__slider ._navigation ._item').click(function(e){
                    e.preventDefault();
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');
                    let slideId = $(this).data('slide');
                    $('.testimontials__slider .testimontials__slide').siblings().removeClass('active');
                    $(`.testimontials__slider .testimontials__slide[slide-id="${slideId}"]`).addClass('active');
                })
            }
        }
    }
}
var overlay = {
    init: function() {
        this.closeMenu();
        this.closeSearchBar();
    },
    closeMenu: function() {
        $('.overlay.menu').click(function() {
            menu.toggle();
        });
    },
    closeSearchBar: function() {
        $('.overlay.main-menu').click(function() {
            menu.mobile.toggle();
        });
    },
    active: function() {
        $(".overlay.menu").toggleClass('active');
    }
}
var navigation = {
    character: "<span class='fw-bold fs-4 _show'>+</span>",
    init: function() {
        navigation.renderArrow();
        navigation.toggleArrow();
    },
    renderArrow: function() {
        var list = $('.site-nav ul li');
        $.each(list, function(key, value) {
            var childCount = $(this).find('ul').length;
            if (childCount > 0) {
                $(this).append(navigation.character);
            }
        });
    },
    toggleArrow: function() {
        $('.menu ._show').click(function() {
            var _this = $(this);
            _this.toggleClass('active');
            if (_this.hasClass('active')) {
                _this.text('-');
            } else {
                _this.text('+');
            }
            _this.prev().toggle('fadein');
        })
    },
}
var page = {
    init: function() {
        page.toggleScrollButton(1000);
        page.scrollToTop();
    },
    toggleScrollButton: function(pixel) {
        $(document).scroll(function() {
            let currentScroll = $(window).scrollTop();
            if (currentScroll > pixel) {
                $('#go-to-top').css('display', 'inline-block');
            } else {
                $('#go-to-top').css('display', 'none');
            }
        })
    },
    scrollToTop: function() {
        $('#go-to-top').click(function(e) {
            e.preventDefault();
            $(document).scrollTop({ top: 0, behavior: 'smooth' });
        })
    }
}
$(document).ready(function() {
    /*header.init();*/
    menu.init();
    overlay.init();
    page.init();
    navigation.init();
    page.init();
    header.init();
    main.init();
});