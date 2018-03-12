
$('.carousel').carousel({
  interval: 2500
});

///
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
}



//NUOTRAUKOS
$(".btn-1").on("click", function() {
   $('#imagepreview').attr('src', $('#imageresource').attr('src'));
   $('#imagemodal').modal('show');
});

$(".btn-2").on("click", function() {
   $('#imagepreview2').attr('src', $('#imageresource2').attr('src'));
   $('#imagemodal2').modal('show');
});

$(".btn-3").on("click", function() {
   $('#imagepreview3').attr('src', $('#imageresource3').attr('src'));
   $('#imagemodal3').modal('show');
});

$(".btn-4").on("click", function() {
   $('#imagepreview4').attr('src', $('#imageresource4').attr('src'));
   $('#imagemodal4').modal('show');
});

$(".btn-5").on("click", function() {
   $('#imagepreview5').attr('src', $('#imageresource5').attr('src'));
   $('#imagemodal5').modal('show');
});

$(".btn-6").on("click", function() {
   $('#imagepreview6').attr('src', $('#imageresource6').attr('src'));
   $('#imagemodal6').modal('show');
});

$(".btn-7").on("click", function() {
   $('#imagepreview7').attr('src', $('#imageresource7').attr('src'));
   $('#imagemodal7').modal('show');
});

$(".btn-8").on("click", function() {
   $('#imagepreview8').attr('src', $('#imageresource8').attr('src'));
   $('#imagemodal8').modal('show');
});

$(".btn-9").on("click", function() {
   $('#imagepreview9').attr('src', $('#imageresource9').attr('src'));
   $('#imagemodal9').modal('show');
});


//Typing tekstas-istorija
var typed = new Typed(".type", {
  strings: ["Trumpa istorija apie mus"],
  typeSpeed: 50,
});
//TIKSLAS
var typed = new Typed(".tikslas", {
  strings: ["Turime tikslą – kurti unikalius, rankų darbo dirbinius, kurie prideda ypatingos kokybės Jūsų gyvenimui."],
  typeSpeed: 30,
});
////
var typed = new Typed(".patogus", {
  strings: ["Patogūs, ilgaamžiai, unikalūs, odiniai rankų darbo gaminiai..."],
  typeSpeed: 40,
});
////
var typed = new Typed(".inividualiai", {
  strings: ["Individualiai pagaminti aksesuarai, kurių kiekviena detalė aptarta su užsakovu, tarnauja labai ilgai."],
  typeSpeed: 40,
});
///


/////////
