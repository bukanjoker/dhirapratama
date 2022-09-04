<div id="fab-menu" class="text-right hidden">
  <div id="fab-container" style="display: none;">

    @include("containers.fabItem", ["id" => "google-maps", "label" => "Google Maps", "icon" => "bi-geo-alt"])
    @include("containers.fabItem", ["id" => "rsvp-ucapan", "label" => "RSVP & Ucapan", "icon" => "bi-send"])
    @include("containers.fabItem", ["id" => "dresscode", "label" => "Dresscode", "icon" => "bi-universal-access"])
    @include("containers.fabItem", ["id" => "protokol", "label" => "Protokol Kesehatan ", "icon" => "bi-shield-exclamation"])
    @include("containers.fabItem", ["id" => "amplop-digital", "label" => "Amplop Digital", "icon" => "bi-gift"])

  </div>
  <button id="fab-opener" type="button" class="bg-light border-0 h3 pb-1 rounded-circle shadow">
    <i class="bi bi-info icon"></i>
  </button>
</div>
