$("#buttonpembuka").click(function() {
  $("#boxpembuka").fadeOut("slow");
  $("body").removeClass("overflow-disable");
  $("#fab-menu").removeClass("hidden");
});

let fabFlag = false;
$("#fab-opener").click(function() {
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
