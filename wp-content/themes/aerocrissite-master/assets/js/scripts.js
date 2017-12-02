function carrega_mapa()
{
var mapProp = {
  center:new google.maps.LatLng(-22.688942, -48.673043),
  zoom:16,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var mapa=new google.maps.Map(document.getElementById("map"),mapProp);

var marca=new google.maps.Marker({
  position:{lat: -22.688942, lng: -48.673043}
  });

marca.setMap(mapa);

var info = new google.maps.InfoWindow({
  content:"Aerocris - SP"
  });

google.maps.event.addListener(marca, 'click', function() {
  info.open(mapa,marca);
  });
}

google.maps.event.addDomListener(window, 'load', carrega_mapa);

  var link = $(".menu-op li a");
  var up = $(".up");

  $(window).scroll(function() {
    var myposition = $(this).scrollTop();
    if(myposition >= 682) {
      up.fadeIn();
    }
    else {
      up.fadeOut();
    }
  })

  

  link.on("click", function() {
    var elemento = $(this).attr("href");
    var posicao = $(elemento).offset().top;
    $("html, body").animate({scrollTop:posicao},1000);
  });

  up.on("click",function(){
    $("html, body").animate({scrollTop:0},1000);
  })
  
  var linkNews = $(".news-list");
  
    linkNews.on("click",function() {
      var remove = $(".active-news");
      remove.removeClass("active-news");
      var elemento = $(this).attr("href");
      $(elemento).addClass("active-news");
    })
    
  debounce = function(func, wait, immediate) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };

(function (){
  var target = $('.anime'),
  animationClass = 'anime-start',
  offset = $(window).height() * 3/4;

  function animeScroll() {
  var documentTop = $(document).scrollTop();

  target.each(function () {
    var itemTop = $(this).offset().top;
    if (documentTop > itemTop - offset) {
      $(this).addClass(animationClass); 
    } else {
      $(this).removeClass(animationClass);
    }
  })
  }

  animeScroll();

  $(document).scroll(debounce(function(){
		animeScroll();
	}, 200));
})();

var sizeFunc = function sizeFunc () {
  var size = $(window).width();
   if (size <= 576) {
    $(".header-intro").prop("controls",true)    
   }
}
$(window).on('load', sizeFunc());


$(function(){
  $('.all a').simpleLightbox();
  $('.products a').simpleLightbox();
  $('.services a').simpleLightbox();
});
