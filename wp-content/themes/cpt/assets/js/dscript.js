$(".i1").on("click", function () {
if($(".pop-up1").hasClass('visible')){
   $(".i1").on("click", function () {
      $(".connector1").removeClass('visible'),
      $(".pop-up1").removeClass('visible');
   });
} else {
$(".i1").on("click", function () {
   $(".connector1").addClass('visible'),
   $(".pop-up1").addClass('visible');
});
}
});

$(".i2").on("click", function () {
   if ($(".pop-up2").hasClass('visible')) {
      $(".i2").on("click", function () {
         $(".connector2").removeClass('visible'),
            $(".pop-up2").removeClass('visible');
      });
   } else {
      $(".i2").on("click", function () {
         $(".connector2").addClass('visible'),
            $(".pop-up2").addClass('visible');
      });
   }
});

$(".i3").on("click", function () {
   if ($(".pop-up3").hasClass('visible')) {
      $(".i3").on("click", function () {
         $(".connector3").removeClass('visible'),
            $(".pop-up3").removeClass('visible');
      });
   } else {
      $(".i3").on("click", function () {
         $(".connector3").addClass('visible'),
            $(".pop-up3").addClass('visible');
      });
   }
});

$(".i4").on("click", function () {
   if ($(".pop-up4").hasClass('visible')) {
      $(".i4").on("click", function () {
         $(".connector4").removeClass('visible'),
            $(".pop-up4").removeClass('visible');
      });
   } else {
      $(".i4").on("click", function () {
         $(".connector4").addClass('visible'),
            $(".pop-up4").addClass('visible');
      });
   }
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
   $("#i6-1").addClass("orangeback"); 
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
      if (height / width >= 4 / 3) {
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