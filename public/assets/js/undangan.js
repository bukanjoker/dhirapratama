$(document).ready(function() {
  $("#cover-container").delay(1000).animate({ opacity: 1 }, 2000);
  $("#buttonpembuka").delay(2000).animate({ opacity: 1 }, 2500);
})

$("#buttonpembuka").click(function() {
  $("#boxpembuka").fadeOut("slow");
  $("body").removeClass("overflow-disable");
  $("#fab-menu").removeClass("hidden");
});

$("#google-maps").click(function() {
  openMaps();
})

function openMaps() {
  window.open("https://goo.gl/maps/ks618ou4bQfPf6k19", '_blank').focus();
}

let fabFlag = false;
$("#fab-menu").click(function() {
  $("#fab-container").slideToggle("slow");

  if (fabFlag) {
    $("#fab-opener").find("i").addClass("bi-info");
    $("#fab-opener").find("i").removeClass("bi-x");
    fabFlag = false;
  } else {
    $("#fab-opener").find("i").removeClass("bi-info");
    $("#fab-opener").find("i").addClass("bi-x");
    fabFlag = true;
  }
});
