<!DOCTYPE html>
<html lang="en">
  <head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>Build A Jeep - Jeep Wheel Builder</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8;">

    <meta property="og:site_name" content="Brandon Tran">
    <meta property="og:title" content="Build and Customize Your Jeep">
    <meta property="og:url" content="https://brandontran.com/jeep">
    <meta property="og:description" content="Create a custom Jeep for fun! Lift it up, add custom wheels, tires, window tint, paint color and scenic backgrounds.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://storage.googleapis.com/brandon-cdn.appspot.com/fb-share-customize-your-jeep.jpg">
    <meta property="fb:admins" content="809344181">
    <meta property="fb:app_id" content="152744914767446">

    <style>
      ::-webkit-scrollbar{display:none}html,body{width:100%;height:100%;min-height:100%;margin:0;padding:0}.slider-container{position:fixed;bottom:0;left:0;right:0;z-index:4;width:100%}.slider{position:absolute;bottom:0;left:0;right:0;z-index:4;overflow:hidden;text-align:center;padding:20px 0;-webkit-transition:-webkit-transform 300ms;-moz-transition:-moz-transform 300ms;-ms-transition:-moz-transform 300ms;-o-transition:-moz-transform 300ms;transition:transform 300ms;-webkit-transform:translate(0, 100%);-moz-transform:translate(0, 100%);-ms-transform:translate(0, 100%);-o-transform:translate(0, 100%);transform:translate(0, 100%)}.slider.active{-webkit-transform:translate(0, 0);-moz-transform:translate(0, 0);-ms-transform:translate(0, 0);-o-transform:translate(0, 0);transform:translate(0, 0)}.slider .scroller{-webkit-transform:translate3d(0, 0, 0);overflow-x:scroll;-webkit-overflow-scrolling:touch}.slider .col-container{display:inline-block;white-space:nowrap;vertical-align:middle}.slider .prev,.slider .next{color:#fff;position:absolute;top:50%;margin-top:-30px;font-size:60px;z-index:4;cursor:pointer;width:60px;height:60px;line-height:60px;background-color:rgba(0,0,0,0.5);background-image:url("https://storage.googleapis.com/brandon-cdn.appspot.com/icons/icon-right.png");background-repeat:no-repeat;background-position:center center;background-size:32px;border-radius:100px}.slider .prev{left:8px;-webkit-transform:rotate(180deg);-moz-transform:rotate(180deg);-ms-transform:rotate(180deg);-o-transform:rotate(180deg);transform:rotate(180deg)}.slider .next{right:8px}.slider .col{vertical-align:top;display:inline-block;width:160px;min-height:40px;overflow:hidden;margin:0 6px;cursor:pointer}.slider .col.active{cursor:default;pointer-events:none}.slider .col:first-child{margin-left:80px}.slider .col:last-child{margin-right:80px}.slider .col .name{white-space:normal;padding:0 8px;text-shadow:0px 0px 4px rgba(0,0,0,0.5)}.slider .col .thumbnail{position:relative;background-color:#000;background-repeat:no-repeat;background-position:center center;background-size:cover;height:80px;line-height:80px;border-radius:4px;margin:4px}.slider .col .preload{position:absolute;left:0;top:0;z-index:-1;height:1px;width:1px;overflow:hidden;visibility:hidden}.touch .prev,.touch .next{display:none}@media all and (min-width: 0px) and (max-width: 700px){.slider{padding:8px 0}.slider .col{width:100px;font-size:10px}.slider .col:first-child{margin-left:20px}.slider .col:last-child{margin-right:20px}.slider .col .thumbnail{height:60px;line-height:60px}}*{-webkit-tap-highlight-color:transparent;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}nav .icon-nav.active{pointer-events:none;box-shadow:0 0 0 4px #fff}.notouch nav .icon-nav:hover{box-shadow:0 0 0 4px #fff}nav .icon-nav:active{opacity:.7}nav .icon-nav.active{background-color:rgba(0,0,0,0.8)}#btn-info:active{opacity:.7}@media all and (min-width: 0px) and (max-width: 800px){.notouch nav .icon-nav:hover{box-shadow:0 0 0 0 #fff}nav .icon-nav.active{box-shadow:0 0 0 0 #fff}}.notouch .slider .col:hover .thumbnail{box-shadow:0 0 0 4px #fff}.notouch .slider .col:active .thumbnail{box-shadow:0 0 0 4px #fff}.slider .col:active{opacity:.7}.slider .col.active .thumbnail{box-shadow:0 0 0 4px #fff}.slider .prev:active,.slider .next:active{opacity:.7}.modal-close{position:absolute;display:block;top:0;right:0;background-size:100%;background-repeat:no-repeat;background-position:center center;width:52px;height:52px;line-height:52px;cursor:pointer;z-index:3;font-size:28px;text-align:center}.modal{display:none;background-color:rgba(0,0,0,0.4);text-align:center;position:fixed;left:0;top:0;right:0;bottom:0;z-index:-2;padding:20px;color:#666}.modal .modal-wrapper{z-index:2;overflow:hidden;vertical-align:middle;display:inline-block;width:100%;max-width:600px;margin:0 auto;border-radius:4px;position:relative;background-color:rgba(255,255,255,0.96);-webkit-transform:translate3d(0, 0, 0);-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;-o-box-sizing:border-box;box-sizing:border-box;margin-right:-2px;margin-left:-2px}.modal:after{vertical-align:middle;display:inline-block;white-space:nowrap;height:100%;width:1px;margin-left:-4px;content:""}.modal .modal-scroller{overflow:auto;-webkit-overflow-scrolling:touch;padding:40px;height:100%;max-height:600px;-webkit-box-sizing:border-box;box-sizing:border-box}.modal .modal-body{text-align:left}.modal .modal-overlay{position:absolute;left:0;top:0;right:0;bottom:0;z-index:1;cursor:pointer}.modal .modal-image{width:80%}.showmodal{overflow:hidden}.showmodal .modal{display:block;z-index:2000}@media screen and (max-height: 600px){.modal .modal-scroller{max-height:none;max-width:none}.modal .modal-wrapper{position:absolute;left:0;right:0;top:0;bottom:0;border-radius:0;max-height:none;max-width:none}}@media all and (max-width: 700px){.modal .modal-scroller{max-height:none;max-width:none}.modal .modal-wrapper{position:absolute;left:0;right:0;top:0;bottom:0;border-radius:0;max-height:none;max-width:none}}#comments{display:none;background:rgba(255,255,255,0.98);position:fixed;top:0;bottom:0;left:0;right:0;overflow:scroll;-webkit-overflow-scrolling:touch;z-index:100;color:#666}#comments h3{text-align:center;margin-left:52px;margin-right:52px}#comments .comment-wrapper{max-width:1024px;margin:0 auto;padding:20px}.showmodal2 #comments{display:block}body{overflow:hidden;font-size:1em;font-family:"Century Gothic", Arial;color:#ffffff;background:url("https://storage.googleapis.com/brandon-cdn.appspot.com/background/bg-colorado-desert.jpg") no-repeat center bottom;background-size:cover;background-color:#000;-webkkit-transform:-webkkit-translate3d(0, 0, 0);-webkit-transition:background 2s;-moz-transition:background 2s;-ms-transition:background 2s;-o-transition:background 2s;transition:background 2s}h1{font-size:28px}#btn-info{position:absolute;right:12px;top:12px;border-radius:60px;height:44px;line-height:44px;width:72px;font-size:11px;background-color:rgba(0,0,0,0.5);cursor:pointer;text-align:center;z-index:3}#btn-comment{position:absolute;right:12px;top:68px;border-radius:60px;height:44px;line-height:44px;width:72px;font-size:11px;color:#fff;background:rgba(0,0,0,0.5);cursor:pointer;text-align:center;z-index:3}.fb-like{position:absolute;top:12px;left:12px;z-index:4;height:86px;width:48px}.fb-like.small{display:none}.fb-like.large{display:inline-block}#canvas{position:fixed;top:0;right:0;left:0;bottom:0;width:100%;height:100%;overflow:hidden;z-index:1}.jeep-container{position:absolute;bottom:19%;left:18%;right:18%}.jeep-container .jeep-wrapper{position:relative;width:100%;height:0;padding-bottom:50%}#jeep-body{position:absolute;bottom:9%;left:0;width:100%;height:0;padding-bottom:40%;z-index:2;-webkkit-transform:-webkkit-translate3d(0, 0, 0);-webkit-transition:transform 1s;-moz-transition:transform 1s;-ms-transition:transform 1s;-o-transition:transform 1s;transition:transform 1s}#jeep-body .jeep-body-image{position:absolute;top:0;left:0;right:0;bottom:0;z-index:2;background:url("https://storage.googleapis.com/brandon-cdn.appspot.com/body/jeep-wrangler-sahara-silver.png") center bottom no-repeat;background-size:100%;background-repeat:no-repeat;background-position:center center;-webkit-transition:background 2s;-moz-transition:background 2s;-ms-transition:background 2s;-o-transition:background 2s;transition:background 2s}#jeep-window-tint{position:absolute;left:13%;top:17%;right:40%;height:26%;z-index:1;opacity:.3;-webkit-transition:opacity 1s;-moz-transition:opacity 1s;-ms-transition:opacity 1s;-o-transition:opacity 1s;transition:opacity 1s}#jeep-window-tint .tint-back,#jeep-window-tint .tint-front{position:absolute;top:0;bottom:0}#jeep-window-tint .tint-back{left:0;width:68%;background-color:#000}#jeep-window-tint .tint-front{right:0;width:30%;background-color:rgba(0,0,0,0.8)}.jeep-wheel{position:absolute;bottom:0;width:21%;z-index:3;border-radius:1000px;cursor:pointer;overflow:hidden;-webkkit-transform:-webkkit-translate3d(0, 0, 0);-webkit-animation-name:wheel-rotate;-moz-animation-name:wheel-rotate;-ms-animation-name:wheel-rotate;-o-animation-name:wheel-rotate;animation-name:wheel-rotate;-webkit-animation-iteration-count:infinite;-moz-animation-iteration-count:infinite;-ms-animation-iteration-count:infinite;-o-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-timing-function:linear;-moz-animation-timing-function:linear;-ms-animation-timing-function:linear;-o-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-play-state:paused;-moz-animation-play-state:paused;-ms-animation-play-state:paused;-o-animation-play-state:paused;animation-play-state:paused}.jeep-wheel.speed1{-webkit-animation-duration:2s;-moz-animation-duration:2s;-ms-animation-duration:2s;-o-animation-duration:2s;animation-duration:2s;-webkit-animation-play-state:running;-moz-animation-play-state:running;-ms-animation-play-state:running;-o-animation-play-state:running;animation-play-state:running}.jeep-wheel.speed2{-webkit-animation-duration:1s;-moz-animation-duration:1s;-ms-animation-duration:1s;-o-animation-duration:1s;animation-duration:1s;-webkit-animation-play-state:running;-moz-animation-play-state:running;-ms-animation-play-state:running;-o-animation-play-state:running;animation-play-state:running}.jeep-wheel.speed3{-webkit-animation-duration:500ms;-moz-animation-duration:500ms;-ms-animation-duration:500ms;-o-animation-duration:500ms;animation-duration:500ms;-webkit-animation-play-state:running;-moz-animation-play-state:running;-ms-animation-play-state:running;-o-animation-play-state:running;animation-play-state:running}.jeep-wheel.wheel-left{left:12%}.jeep-wheel.wheel-right{right:8%}.jeep-wheel .wheel-wrapper{position:relative;width:100%;height:0;padding-bottom:100%;z-index:3}.jeep-wheel .wheel{-webkkit-transform:-webkkit-translate3d(0, 0, 0);-webkit-transition:background 1s;-moz-transition:background 1s;-ms-transition:background 1s;-o-transition:background 1s;transition:background 1s;position:absolute;left:0;top:0;height:100%;width:100%;background:url("https://storage.googleapis.com/brandon-cdn.appspot.com/wheel/wheel-265-70-17-stock.png") center center no-repeat;background-size:100%;z-index:3}@-webkit-keyframes wheel-rotate{0%{-webkit-transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg)}}@-moz-keyframes wheel-rotate{0%{-moz-transform:rotate(0deg)}100%{-moz-transform:rotate(360deg)}}@-ms-keyframes wheel-rotate{0%{-ms-transform:rotate(0deg)}100%{-ms-transform:rotate(360deg)}}@-o-keyframes wheel-rotate{0%{-o-transform:rotate(0deg)}100%{-o-transform:rotate(360deg)}}@keyframes wheel-rotate{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}ul,li{text-align:left}li{margin-bottom:1em}nav{text-align:center;position:absolute;left:72px;top:12px;right:72px;height:100px;z-index:4}nav .icon-nav{position:relative;display:inline-block;color:#fff;cursor:pointer;width:110px;height:100px;background-position:center 20%;background-repeat:no-repeat;background-size:60px;padding:0;margin:0 8px;border-radius:4px;background-color:rgba(0,0,0,0.5)}nav .icon-nav div{position:absolute;bottom:8px;left:0;right:0;text-shadow:0px 0px 4px rgba(0,0,0,0.5)}nav .icon-paint{background-image:url("https://storage.googleapis.com/brandon-cdn.appspot.com/icons/icon-paint-200.png")}nav .icon-lift-kits{background-image:url("https://storage.googleapis.com/brandon-cdn.appspot.com/icons/icon-lift-kits-200.png")}nav .icon-window-tint{background-image:url("https://storage.googleapis.com/brandon-cdn.appspot.com/icons/icon-window-tint-200.png");background-position:center 30%}nav .icon-wheels{background-image:url("https://storage.googleapis.com/brandon-cdn.appspot.com/icons/icon-wheels-200.png")}nav .icon-backgrounds{background-image:url("https://storage.googleapis.com/brandon-cdn.appspot.com/icons/icon-backgrounds-200.png")}@media all and (min-width: 0px) and (max-width: 800px){h1{font-size:22px}.fb-like{position:absolute;top:68px;left:8px;height:22px;width:122px}.fb-like.small{display:inline-block}.fb-like.large{display:none}#btn-info{top:68px;right:96px}#btn-comment{top:68px}nav{left:0;top:0;right:0;height:80px;font-size:8px}nav .icon-nav{border-radius:0;width:20%;height:60px;background-size:32px;margin:0}nav .icon-nav div{bottom:8px}.jeep-container{left:0;right:0}}
    </style>



    <script>
        // JS DATA


// PAINT COLORS
var paintColors = [
  {
    "color": "#b7b8bd",
    "name": "Silver",
    "active": "active",
    "image": "jeep-wrangler-sahara-silver.png"
  },
  {
    "color": "#dc5404",
    "name": "Sunset Orange",
    "image": "jeep-wrangler-sahara-sunset-orange.png"
  },
  {
    "color": "#2e74ad",
    "name": "Hydro Blue",
    "image": "jeep-wrangler-sahara-hydro-blue.png"
  },
  {
    "color": "#faba21",
    "name": "Baja Yellow",
    "image": "jeep-wrangler-sahara-baja-yellow.png"
  },
  {
    "color": "#797979",
    "name": "Billet Silver Metallic",
    "image": "jeep-wrangler-sahara-billet-silver.png"
  },
  {
    "color": "#000000",
    "name": "Black",
    "image": "jeep-wrangler-sahara-black.png"
  },
  {
    "color": "#f4f4f4",
    "name": "White",
    "image": "jeep-wrangler-sahara-white.png"
  },
  {
    "color": "#795c42",
    "name": "Copper Brown",
    "image": "jeep-wrangler-sahara-copper-brown.png"
  },
  {
    "color": "#c70500",
    "name": "Firecracker Red",
    "image": "jeep-wrangler-sahara-firecracker-red.png"
  },
  {
    "color": "#34301f",
    "name": "Tank",
    "image": "jeep-wrangler-sahara-tank.png"
  }

];







// JEEP WHEELS
var jeepWheels = [
  {
    "active": "active",
    "name": "17\" Stock Wheels",
    "image": "wheel-265-70-17-stock.png"
  },
  {
    "name": "35\" Nitto Grappler Trail",
    "image": "wheel-35-nitto-grappler-trail.png"
  }
];











// LIFT KIT
var liftKit = [
  {
    "name": "Low Rider -3\"",
    "value": "3%"
  },
  {
    "active": "active",
    "name": "No Lift",
    "value": "0"
  },
  {
    "name": "Conservative 1\"",
    "value": "-1%"
  },
  {
    "name": "Little Bit 2\"",
    "value": "-2%"
  },
  {
    "name": "Mild 3\"",
    "value": "-3%"
  },
  {
    "name": "Get Some 6\"",
    "value": "-6%"
  },
  {
    "name": "Mack 10\"",
    "value": "-10%"
  },
  {
    "name": "Super 13\"",
    "value": "-13%"
  },
  {
    "name": "Woah 16\"",
    "value": "-16%"
  },
  {
    "name": "Monster 19\"",
    "value": "-19%"
  }
];









// WINDOWTINT
var windowTint = [
  {
    "name": "No Tint 100%",
    "value": "0"
  },
  {
    "name": "Light 90%",
    "value": ".1"
  },
  {
    "name": "Light 80%",
    "value": ".2"
  },
  {
    "active": "active",
    "name": "Light 70%",
    "value": ".3"
  },
  {
    "name": "Medium 60%",
    "value": ".4"
  },
  {
    "name": "Medium 50%",
    "value": ".5"
  },
  {
    "name": "Medium 40%",
    "value": ".6"
  },
  {
    "name": "Dark 30%",
    "value": ".7"
  },
  {
    "name": "Super Dark 20%",
    "value": ".8"
  },
  {
    "name": "Super Dark 10%",
    "value": ".9"
  },
  {
    "name": "LoL Ilegal 0%",
    "value": "1"
  }
];



















// BACKGROUND IMAGES
var backGrounds = [
  {
    "active": "active",
    "name": "Colorado Desert",
    "image": "bg-colorado-desert.jpg"
  },
  {
    "name": "Canada Snow",
    "image": "bg-canada-snow.jpg"
  },
  {
    "name": "Cityscape",
    "image": "bg-city-road-street.jpg"
  },
  {
    "name": "Grassy Knoll",
    "image": "bg-grassy-knoll.jpg"
  },
  {
    "name": "Wadi Rum Dessert",
    "image": "bg-wadi-rum-dessert.jpg"
  },
  {
    "name": "Nighttime Snow",
    "image": "bg-nighttime-snow.jpg"
  },
  {
    "name": "At The Park",
    "image": "bg-at-the-park.jpg"
  },
  {
    "name": "Grass & Trees",
    "image": "bg-grass-and-trees.jpg"
  },
  {
    "name": "At The Beach",
    "image": "bg-at-the-beach.jpg"
  },
  {
    "name": "River Side",
    "image": "bg-river-side.jpg"
  }
];

//  JS DATA END

    </script>











    <script>
        // Jeep Script
var cdnUrl = "https://storage.googleapis.com/brandon-cdn.appspot.com";
$(function(){
  init();
  browserSupport();
  spinThoseWheels();
  // Render category sliders
  renderPaintColorsSlider();
  renderLiftKitsSlider();
  renderTintSlider();
  renderWheelsSlider();
  renderBackgroundsSlider();


  // Bind slider buttons
  initSlider();

  // Get Location Params
  getLocationParams();
});

function getLocationParams(){
  var params = location.params();
  //console.log('Params', params);
}


function init(){


  // COLOR
  $('[data-color]').on('click', function(e){
    e.preventDefault();
    var val = $(this).attr('data-color');
    $("#jeep-body").removeClass();
    $('#jeep-body').addClass(val);
  });

  // BACKGROUND
  $('[data-background]').on('click', function(e){
    e.preventDefault();
    var val = $(this).attr('data-background');
    $("body").removeClass();
    $('body').addClass(val);
  });


  // MENU NAV CATEGORY CHANGE
  $('nav [data-category]').on('click', function(e){
    e.preventDefault();
    // Change Active Sliders
    var val = $(this).attr('data-category');
    $(".slider").removeClass('active');
    $('#'+val).addClass('active');

    // Change active icon in menu
    $('nav [data-category]').removeClass('active');
    $(this).addClass('active');
    //console.log(val);
  });

  $('#btn-info').on('click', function(e){
    e.preventDefault();
    $('body').addClass('showmodal');
    bindCloseModal();
  });

  $('#btn-comment').on('click', function(e){
    e.preventDefault();
    $('body').addClass('showmodal2');
    bindCloseModal();
  });

}



// Close Modal
function bindCloseModal(cb){
  $(document).on("keydown.modal", function(e) {
    if (e.keyCode == 27) {
      e.preventDefault();
      closeModal(cb);
    }
  });
  $('.modal-overlay, .modal-close').on('click.modal', function(e) {
    closeModal(cb);
  });
  function closeModal(cb) {
      if(typeof cb === "function"){
        cb();
      }
      $(".modal-overlay, .modal-close").off("click.modal");
      $(document).off("keydown.modal");
      $("body").removeClass("showmodal showmodal2");
  }
}



// IS THIS A TOUCH DEVICE
function browserSupport(){
  var isTouch = false;
  if ("ontouchstart" in window || navigator.msMaxTouchPoints){
    isTouch = true;
    $('body').addClass('touch');
    noSwipeOnJeep();
  } else {
    $('body').addClass('notouch');
    isTouch = false;
  }
  isTouch=((document.ontouchstart!==null) ? false : true );
}


// Stop Page Swipe on Jeep
function noSwipeOnJeep(){
  $('#canvas').on('touchmove', function(e){
    e.preventDefault();
  });
}

// SPIN THOSE WHEELS
function spinThoseWheels(){
  var i=1;
  $('.jeep-wheel').on('click', function(e){
    $('.jeep-wheel').hide();
    if(i===4){
      i=0;
      $('.jeep-wheel').removeClass('speed1 speed2 speed3');
    } else {
      $('.jeep-wheel').removeClass('speed1 speed2 speed3');
      $('.jeep-wheel').addClass('speed'+i);
    }
    setTimeout(function(){
      $('.jeep-wheel').show();
    },1);
    i++;
  });
}


// PAINT COLORS SLIDER
function renderPaintColorsSlider(){
  // img/body/
  $.each(paintColors, function(k,v){
    v.active = v.active || "";
    var ele = $('<div>', {
      'class': 'col ' + v.active,
      'html': '<div class="thumbnail" style="background-color:' + v.color + ';">\
      <div class="name">' + v.name + '</div>\
      <div class="preload" style="background-image: url(\'' + cdnUrl + '/body/' + v.image + '\');"></div>\
      </div>'
    }).appendTo($('#paint-shop .col-container'));

    ele.on('click', function(e){
      $("#jeep-body .jeep-body-image").css("background-image", "url('" + cdnUrl + "/body/" + v.image +"')");
      $('#paint-shop .col').removeClass('active');
      $(this).addClass('active');
    });
  });
}


// LIFT KIT SLIDER
function renderLiftKitsSlider(){
  // img/body/
  $.each(liftKit, function(k,v){
    var ele = $('<a>', {
      'class': 'col ' + v.active,
      'html': '<div class="thumbnail"><div class="name">' + v.name + '</div></div>'
    }).appendTo($('#lift-kits .col-container'));

    ele.on('click', function(e){
      $("#jeep-body").css('transform', 'translate(0,' + v.value + ')');
      $('#lift-kits .col').removeClass('active');
      $(this).addClass('active');
    });

  });
}






// WINDOW TINT SLIDER
function renderTintSlider(){
  $.each(windowTint, function(k,v){
    var active = "";
    if(v.active){
      active = v.active;
    }
    var ele = $('<a>', {
      'class': 'col ' + active,
      'html': '<div class="thumbnail" style="background-color:rgba(0,0,0,' + v.value + ');"><div class="name">' + v.name + '</div></div>'
    }).appendTo($('#window-tint .col-container'));

    ele.on('click', function(e){
      $("#jeep-window-tint").css('opacity', v.value);
      $('#window-tint .col').removeClass('active');
      $(this).addClass('active');
    });

  });
}





// BACKGROUNDS SLIDER
function renderWheelsSlider(){
  // img/body/
  $.each(jeepWheels, function(k,v){
    v.active = v.active || "";
    var ele = $('<a>', {
      'class': 'col ' + v.active,
      'html': '<div class="thumbnail" style="background-image: url(\'' + cdnUrl + '/wheel/' + v.image + '\');">\
      <div class="name">' + v.name + '</div>\
      </div>'
    }).appendTo($('#wheels .col-container'));

    ele.on('click', function(e){
      $(".jeep-wheel .wheel").css("background-image", "url('" + cdnUrl + "/wheel/" + v.image +"')");
      $('#wheels .col').removeClass('active');
      $(this).addClass('active');
    });
  });
}





// BACKGROUNDS SLIDER
function renderBackgroundsSlider(){
  // img/body/
  $.each(backGrounds, function(k,v){
    v.active = v.active || "";
    var ele = $('<a>', {
      'class': 'col ' + v.active,
      'html': '<div class="thumbnail" style="background-image: url(\'' + cdnUrl + '/background/' + v.image + '\');">\
      <div class="name">' + v.name + '</div>\
      </div>'
    }).appendTo($('#backgrounds .col-container'));

    ele.on('click', function(e){
      $("body").css("background-image", "url('" + cdnUrl + "/background/" + v.image +"')");
      $('#backgrounds .col').removeClass('active');
      $(this).addClass('active');
    });
  });
}

















function initSlider(){
  var duration = 700;
  $('.btn-slider').on('click', function(e){
    var width = $(window).width() *.8;
    var direction;

    if($(this).hasClass('prev')){
      direction = '-=';
    } else {
      direction = '+=';
    }
    //console.log('next', direction+width);
    $(this).siblings($('.scroller')).animate({
        scrollLeft: direction + width
    }, 600);
  });
}






// Params Helper
// http://stackoverflow.com/a/28132596
location.params = function(params) {
  var obj = {}, i, parts, len, key, value;

  if (typeof params === 'string') {
    value = location.search.match(new RegExp('[?&]' + params + '=?([^&]*)[&#$]?'));
    return value ? value[1] : undefined;
  }

  var _params = location.search.substr(1).split('&');

  for (i = 0, len = _params.length; i < len; i++) {
    parts = _params[i].split('=');
    if (! parts[0]) {continue;}
    obj[parts[0]] = parts[1] || true;
  }

  if (typeof params !== 'object') {return obj;}

  for (key in params) {
    value = params[key];
    if (typeof value === 'undefined') {
      delete obj[key];
    } else {
      obj[key] = value;
    }
  }

  parts = [];
  for (key in obj) {
    parts.push(key + (obj[key] === true ? '' : '=' + obj[key]));
  }

  location.search = parts.join('&');
};



        // Jeep Script
    </script>










</head>
<body>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=152744914767446";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


  <div class="modal">
    <div class="modal-overlay"></div>
    <div class="modal-wrapper">
      <div class="modal-scroller">
        <div class="modal-close">x</div>
        <h1>About "Build A Jeep" <i>by Brandon Tran</i></h1>

        <p class="modal-body">
          One day I wanted to customize my Jeep, but also I wanted to know what it would look like before spending $1000's
          on lift kits, wheels, gear and swag.
          It's always nice to be efficient with the dough you are going to invest into a hobby project.
          At first I started looking on the web for apps and sites to check out but I didn't have much luck.
          I then decided to create my own mini app to do just that.
          I present to you "Brandon's Build A Jeep" a lightweight jeep 2014 visualizer app.
        </p>

        <p class="modal-body">
          Today this app is very limited but stay tuned as I plan to expand it over time.
          Features coming soon:
        </p>

        <ul>
          <li>More wheels and tires</li>
          <li>Share your jeep image</li>
          <li>Sound effects</li>
        </ul>

        <p class="modal-body">
          Hope you get a kick out of it and share it with friends.
          Thanks for the support!
        </p>

        <p class="modal-body">
          <ul>
            <li>Build A Jeep App - &copy; Brandon Tran 2015</li>
            <li>Other Contributors: Luis Castro for design support and hand drawn custom icons</li>
            <li>Jeep Images and Photography - &copy; Jeep</li>
            <li>Background Images - Royalty Free</li>
          </ul>
        </p>

      </div>
    </div>
  </div>


  <div id="comments">
    <div class="modal-close">x</div>
    <h3>Leave us a comment, feedback or share your Jeep story</h3>
    <div class="comment-wrapper">
      <div class="fb-comments" data-href="http://brandontran.com/jeep" data-width="100%" data-numposts="20"></div>
    </div>
  </div>

  <nav>
    <a class="icon-nav icon-paint active" data-category="paint-shop"><div>Paint Shop</div></a><!--
    --><a class="icon-nav icon-lift-kits" data-category="lift-kits"><div>Lift Kits</div></a><!--
    --><a class="icon-nav icon-window-tint" data-category="window-tint"><div>Window Tint</div></a><!--
    --><a class="icon-nav icon-wheels" data-category="wheels"><div>Wheels</div></a><!--
    --><a class="icon-nav icon-backgrounds" data-category="backgrounds"><div>Background</div></a>
  </nav>



  <div class="fb-like large" data-href="http://brandontran.com/jeep" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
  <a id="btn-info" title="Info About Build A Jeep">About</a>
  <a id="btn-comment" title="Leave A Comment">Comments</a>


<div class="slider-container">

  <!-- JEEP Paint Factory -->
  <div class="slider active" id="paint-shop">
    <div class="scroller">
      <div class="col-container"><!-- items here --></div>
    </div>
    <div class="btn-slider prev"></div>
    <div class="btn-slider next"></div>

  </div>

  <!-- JEEP Lift Kits -->
  <div class="slider" id="lift-kits">
    <div class="btn-slider prev"></div>
    <div class="btn-slider next"></div>
    <div class="scroller">
      <div class="col-container"><!-- items here --></div>
    </div>
  </div>

  <!-- JEEP Window Tint -->
  <div class="slider" id="window-tint">
    <div class="btn-slider prev"></div>
    <div class="btn-slider next"></div>
    <div class="scroller">
      <div class="col-container"><!-- items here --></div>
    </div>
  </div>

  <!-- JEEP Wheels -->
  <div class="slider" id="wheels">
    <div class="btn-slider prev"></div>
    <div class="btn-slider next"></div>
    <div class="scroller">
      <div class="col-container"><!-- items here --></div>
    </div>
  </div>

  <!-- JEEP Backgrounds -->
  <div class="slider" id="backgrounds">
    <div class="btn-slider prev"></div>
    <div class="btn-slider next"></div>
    <div class="scroller">
      <div class="col-container"><!-- items here --></div>
    </div>
  </div>
</div>














  <!-- JEEP Workshop -->
  <div id="canvas">
      <div class="jeep-container">
        <div class="jeep-wrapper">

          <div id="jeep-body">
            <div class="jeep-body-image"></div>
            <div id="jeep-window-tint">
              <div class="tint-back"></div>
              <div class="tint-front"></div>
            </div>
          </div>

          <div class="jeep-wheel wheel-left">
            <div class="wheel-wrapper">
              <div class="wheel"></div>
            </div>
          </div>

          <div class="jeep-wheel wheel-right">
            <div class="wheel-wrapper">
              <div class="wheel"></div>
            </div>
          </div>

        </div>
      </div>
  </div>








	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2896135-41"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());	
	  gtag('config', 'UA-2896135-41');
	</script>

</body>
</html>