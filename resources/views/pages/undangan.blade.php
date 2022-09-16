<!DOCTYPE html>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
  	<title>Fetra & Eka | Wedding Invitation</title>
  	<meta name="title" content="Fetra & Eka | Wedding Invitation">
  	<meta name="description" content="1102022 - Bismillah, mohon kehadiran dan doa restunya pada acara pernikahan kami. Fetra dan Eka. Terima kasih.">

  	<link rel="apple-touch-icon" sizes="180x180" href="assets/icons/love_letter/apple-touch-icon.png">
  	<link rel="icon" type="image/png" sizes="32x32" href="assets/icons/love_letter/favicon-32x32.png">
  	<link rel="icon" type="image/png" sizes="16x16" href="assets/icons/love_letter/favicon-16x16.png">
  	<link rel="manifest" href="assets/icons/love_letter/site.webmanifest">

    <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">

  	<link rel="stylesheet" type="text/css" href="assets/css/undangan.css">
  </head>
  <body oncontextmenu="return false" class="overflow-disable">
    @include("containers.cover")
    <div class="undangan-container">
      <div class="text-center">
        <img src="assets/images/logo-fe.png" class="logo" alt="logo-fe">
        <div class="section-text">
          Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, insyaa Allah kami akan menyelenggarakan acara pernikahan
        </div>

        @include("containers.mempelai")

        <div class="section-text">
          Maha Suci Allah Subhanahu Wa Ta’ala yang menautkan dua hati dalam ikatan suci pernikahan. Semoga menjadi langkah awal kami bisa berkumpul bersama kaum mukminin di Syurga kelak
        </div>

        @include("containers.waktu")
        @include("containers.lokasi")
        @include("containers.ucapan")
        @include("containers.terimakasih")

      </div>

      <div id="fab-menu" class="text-right hidden">
        <div id="fab-container" style="display: none;">

          @include("containers.fabItem", ["id" => "google-maps", "label" => "Google Maps", "icon" => "bi-geo-alt", "isModal" => false])
          @include("containers.fabItem", ["id" => "rsvp-ucapan", "label" => "RSVP & Ucapan", "icon" => "bi-send", "isModal" => true])
          @include("containers.fabItem", ["id" => "dresscode", "label" => "Dresscode", "icon" => "bi-universal-access", "isModal" => true])
          @include("containers.fabItem", ["id" => "protokol", "label" => "Protokol Kesehatan ", "icon" => "bi-shield-exclamation", "isModal" => true])
          @include("containers.fabItem", ["id" => "amplop-digital", "label" => "Amplop Digital", "icon" => "bi-gift", "isModal" => true])

        </div>
        <button id="fab-opener" type="button" class="bg-light border-0 h3 pb-1 rounded-circle shadow">
          <i class="bi bi-info icon"></i>
        </button>
      </div>

    </div>

    <script type="text/javascript">
      window.onbeforeunload = function () {
        window.scrollTo(0, 0);
      }
    </script>
  	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
  	<script type="text/javascript" src="assets/js/undangan.js"></script>
  </body>
</html>
