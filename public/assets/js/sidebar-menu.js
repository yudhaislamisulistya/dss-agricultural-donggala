if($(".toggle-nav").click((function(){$(".nav-menu").css("left","0px")})),$(".mobile-back").click((function(){$(".nav-menu").css("left","-410px")})),$(".page-wrapper").attr("class","page-wrapper "+localStorage.getItem("page-wrapper")),$(".page-body-wrapper").attr("class","page-body-wrapper "+localStorage.getItem("page-body-wrapper")),null===localStorage.getItem("page-wrapper")&&$(".page-wrapper").addClass("compact-wrapper"),$("#pageWrapper").hasClass("compact-wrapper"))jQuery(".submenu-title").append('<div class="according-menu"><i class="fa fa-angle-right"></i></div>'),jQuery(".submenu-title").click((function(){jQuery(".submenu-title").removeClass("active"),jQuery(".submenu-title").find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>'),jQuery(".submenu-content").slideUp("normal"),1==jQuery(this).next().is(":hidden")?(jQuery(this).addClass("active"),jQuery(this).find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>'),jQuery(this).next().slideDown("normal")):jQuery(this).find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>')})),jQuery(".submenu-content").hide(),jQuery(".menu-title").append('<div class="according-menu"><i class="fa fa-angle-right"></i></div>'),jQuery(".menu-title").click((function(){jQuery(".menu-title").removeClass("active"),jQuery(".menu-title").find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>'),jQuery(".menu-content").slideUp("normal"),1==jQuery(this).next().is(":hidden")?(jQuery(this).addClass("active"),jQuery(this).find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>'),jQuery(this).next().slideDown("normal")):jQuery(this).find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>')})),jQuery(".menu-content").hide();else if($("#pageWrapper").hasClass("horizontal-wrapper")){var contentwidth=jQuery(window).width();contentwidth<"992"&&($("#pageWrapper").removeClass("horizontal-wrapper").addClass("compact-wrapper"),$(".page-body-wrapper").removeClass("horizontal-menu").addClass("sidebar-icon"),jQuery(".submenu-title").append('<div class="according-menu"><i class="fa fa-angle-right"></i></div>'),jQuery(".submenu-title").click((function(){jQuery(".submenu-title").removeClass("active"),jQuery(".submenu-title").find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>'),jQuery(".submenu-content").slideUp("normal"),1==jQuery(this).next().is(":hidden")?(jQuery(this).addClass("active"),jQuery(this).find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>'),jQuery(this).next().slideDown("normal")):jQuery(this).find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>')})),jQuery(".submenu-content").hide(),jQuery(".menu-title").append('<div class="according-menu"><i class="fa fa-angle-right"></i></div>'),jQuery(".menu-title").click((function(){jQuery(".menu-title").removeClass("active"),jQuery(".menu-title").find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>'),jQuery(".menu-content").slideUp("normal"),1==jQuery(this).next().is(":hidden")?(jQuery(this).addClass("active"),jQuery(this).find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>'),jQuery(this).next().slideDown("normal")):jQuery(this).find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-right"></i></div>')})),jQuery(".menu-content").hide())}$(".toggle-sidebar").click((function(){$(".main-nav").toggleClass("close_icon"),$(".page-main-header").toggleClass("close_icon")}));var $window=$(window),widthwindow=$window.width();!function(e){"use strict";widthwindow+17<=993&&(e(".toggle-sidebar").attr("checked",!1),e(".main-nav").addClass("close_icon"),e(".page-main-header").addClass("close_icon"))}(jQuery),$(window).resize((function(){$window.width()+17<=991?($(".toggle-sidebar").attr("checked",!1),$(".main-nav").addClass("close_icon"),$(".page-main-header").addClass("close_icon")):($(".toggle-sidebar").attr("checked",!1),$(".main-nav").removeClass("close_icon"),$(".page-main-header").removeClass("close_icon")),widthwindow>=768&&$(".toggle-sidebar").click((function(){$(".main-nav").toggleClass("close_icon"),$(".page-main-header").toggleClass("close_icon")}))}));var view=$("#mainnav"),move="500px",leftsideLimit=-500,getMenuWrapperSize=function(){return $(".sidebar-wrapper").innerWidth()},menuWrapperSize=getMenuWrapperSize();if(menuWrapperSize>="1660")var sliderLimit=-3e3;else if(menuWrapperSize>="1440")sliderLimit=-3600;else sliderLimit=-4200;$("#left-arrow").addClass("disabled"),$("#right-arrow").click((function(){var e=parseInt(view.css("marginLeft"));e>=sliderLimit&&($("#left-arrow").removeClass("disabled"),view.stop(!1,!0).animate({marginLeft:"-="+move},{duration:400}),e==sliderLimit&&($(this).addClass("disabled"),console.log("sliderLimit",sliderLimit)))})),$("#left-arrow").click((function(){var e=parseInt(view.css("marginLeft"));e<0&&(view.stop(!1,!0).animate({marginLeft:"+="+move},{duration:400}),$("#right-arrow").removeClass("disabled"),$("#left-arrow").removeClass("disabled"),e>=leftsideLimit&&$(this).addClass("disabled"))})),$(".main-navbar").find("a").removeClass("active"),$(".main-navbar").find("li").removeClass("active");var current=window.location.pathname;$(".main-navbar ul>li a").filter((function(){var e=$(this).attr("href");if(e&&-1!=current.indexOf(e))return $(this).parents().children("a").addClass("active"),$(this).parents().parents().children("ul").css("display","block"),$(this).addClass("active"),$(this).parent().parent().parent().children("a").find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>'),$(this).parent().parent().parent().parent().parent().children("a").find("div").replaceWith('<div class="according-menu"><i class="fa fa-angle-down"></i></div>'),!1})),$(".custom-scrollbar").animate({scrollTop:$("a.nav-link.menu-title.active").offset().top-500},1e3);