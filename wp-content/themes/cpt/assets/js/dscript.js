$(".i1").on("click", function () {
   $(".connector1").toggleClass('visible'),
      $(".pop-up1").toggleClass('visible');
});
$(".i2").on("click", function () {
   $(".connector2").toggleClass('visible'),
      $(".pop-up2").toggleClass('visible');
});
$(".i3").on("click", function () {
   $(".connector3").toggleClass('visible'),
      $(".pop-up3").toggleClass('visible');
});
$(".i4").on("click", function () {
   $(".connector4").toggleClass('visible'),
      $(".pop-up4").toggleClass('visible');
});
$(".lm1").on("click", function () {
   $(".al1").attr('style', 'visibility: visible; opacity: 92%; transition: all 0.5s ease 0s');
});
$(".lm2").on("click", function () {
   $(".al2").attr('style', 'visibility: visible; opacity: 92%; transition: all 0.5s ease 0s');
});
$(".lm3").on("click", function () {
   $(".al3").attr('style', 'visibility: visible; opacity: 92%; transition: all 0.5s ease 0s');
});
$(".close").on("click", function () {
   $(".all-info").attr('style', 'visibility: hidden; opacity: 0%; transition: all 0.5s ease 0s');
});
$("#i6-2").on("mouseover", function () {
   $("#i6-1").addClass("orangeback");
});
$("#i6-2").on("mouseout", function () {
   $("#i6-1").removeClass("orangeback");
});
$("#i6-3").on("mouseout", function () {
   $("#i6-1").removeClass("orangeback");
   $("#i6-2").removeClass("orangeback");
});
$("#i6-3").on("mouseover", function () {
   $("#i6-1").addClass("orangeback");
   $("#i6-2").addClass("orangeback");
});
$("#i6-4").on("mouseout", function () {
   $("#i6-1").removeClass("orangeback");
   $("#i6-2").removeClass("orangeback");
   $("#i6-3").removeClass("orangeback");
});
$("#i6-4").on("mouseover", function () {
   $("#i6-1").addClass("orangeback");z
   $("#i6-2").addClass("orangeback");
   $("#i6-3").addClass("orangeback");
});

if ($(window).width() <= '1410') {
   $(".i1").on("click", function () {
      $(".al1").attr('style', 'visibility: visible; opacity: 92%; transition: all 0.5s ease 0s');
   });
   $(".i2").on("click", function () {
      $(".al2").attr('style', 'visibility: visible; opacity: 92%; transition: all 0.5s ease 0s');
   });
   $(".i3").on("click", function () {
      $(".al3").attr('style', 'visibility: visible; opacity: 92%; transition: all 0.5s ease 0s');
   });
   $(".i4").on("click", function () {
      $(".al4").attr('style', 'visibility: visible; opacity: 92%; transition: all 0.5s ease 0s');
   });

}

var is_reload = false;
var isClicked = false;

$(document).ready(function () {
   function check_device_format() {
      var width = $(window).width();
      var height = $(window).height();
      if (height/width >= 4/3) {
         $('.container').addClass('device-portrait');
         $('.main').addClass('device-portrait');
      } else {
         $('.container').removeClass('device-portrait');
         $('.main').removeClass('device-portrait');
      }
   }
   check_device_format();
   $(window).resize(function () {
      check_device_format();
   }).trigger('resize');
});