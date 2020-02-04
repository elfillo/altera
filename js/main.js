"use strict";

//active link
$(function () {
    $(".nav_header li a").each(function () {
        window.location.href == this.href && $(this).addClass("active");
        this.pathname == '/kontakty/' && $(this).parent().addClass("contact_link");
    });

});

//show sub menu
$(document).ready(function () {
  $('.nav_header li')
      .mouseenter(function () {
        $(this).addClass('show_sub');
      })
      .mouseleave(function () {
        let self = this;
        setTimeout(function () {
          $(self).removeClass('show_sub');
        }, 500);

      })
  ;
});

//show arrow (on main menu)
$(document).ready(function () {
  let sub = $('.sub-menu');
  let svg = `<svg class="inline-svg-icon" viewBox="0 0 492 492">
                <use xlink:href="#icon--arrow"></use>
            </svg>`;
  sub.parent().addClass('show_arrow');
  sub.parent().append( svg );
});

//open mobile menu
$(document).ready(function(){
    var showMenu = false;
    $('.burger').click(function(){
        showMenu = !showMenu;
        if(showMenu){
            $('.mobile_menu').css({
                'display':'block',
                'opacity':'1',
                'transition':'0.2s'
            });
            $('.burger span:nth-child(2)').css({
                'display':'none'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'rotate(45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
            $('.burger span:nth-child(3)').css({
                'transform':'rotate(-45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
        }else{
            $('.mobile_menu').css({
                'display':'none',
                'opacity':'1',
                'transition':'0.2s'
            });
            $('.burger span:nth-child(2)').css({
                'display':'block'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'

            });
            $('.burger span:nth-child(3)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'
            });
        }
    });
});

//open modal

$(document).ready(function () {
   $('.open_modal').click(function () {
       $('.modal').css('display', 'flex');
   });
});

//close modal
$(document).ready(function () {
    $('.form .close').click(function () {
       $('.modal').css('display', 'none');
    });
});

//footer for contact page
$(document).ready(function () {
    if(window.location.pathname === '/kontakty/'){
        $('.footer').css('margin-top', '-18px');
    }
});

//fix breadcrumbs woocommerce
$(document).ready(function () {
    if(window.location.pathname === '/shop/'){
        $('.woocommerce-breadcrumb').text('Магазин');
    }
});

//draw cart for shop header

$(document).ready(function () {
    let shopNav = $('.nav_shop ');
    let cart = `
            <a href="/cart/">
                <svg class="cart" viewBox="0 0 492 492">
                    <use xlink:href="#icon--cart"></use>
                </svg>
            </a>`;
    let count = `<div class="cart_count"></div>`;

    getSubTotalSum();

    if(shopNav){
        $(".nav_shop li a").each(function () {
            this.pathname == '/shop/' && $(this).parent().addClass('shop-item');
            this.pathname == '/shop/' && $(this).addClass('active');
            this.pathname == '/shop/' && $(this).parent().append(count);
            this.pathname == '/shop/' && $(this).parent().append(cart);
        });
    }



});