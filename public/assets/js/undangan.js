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

function submitUcapan() {
  if (document.forms['form-ucapan'].reportValidity()) {
    const formId = "form-ucapan";
    let formValues = {};
    $.each($("#"+formId).serializeArray(), function (i, field) {
        formValues[field.name] = field.value;
    });

    $.ajax({
        url: '/fetra-eka-wedding/rsvp-submit',
        method: 'post',
        data: $("#"+formId).serialize(),
        success: function() {
            $("#rsvp-ucapan").modal('hide');
            $("#card-rsvp").prepend(
              `<div class="pb-2">
                <div>
                  <span class="nama">${formValues.name}</span>
                  ${formValues.address ? ('<b>• '+formValues.address+'</b>') : ''}
                </div>
                <i>${formValues.comments}</i>
              </div>`
            ).fadeIn('slow');
        }
    })
  }
}

function copyText(elm) {
  $($(elm).parent().find('button')[0]).html("Copied");
  const textVal = $(elm).parent().find('input')[0].value;
  navigator.clipboard.writeText(textVal);
}
