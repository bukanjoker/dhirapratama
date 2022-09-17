<div class="modal fade" id="rsvp-ucapan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="p-3">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding: 0; margin: 0;">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="font-styled">RSVP Ucapan</h3>
      </div>
      <form id="form-ucapan" class="" action="" method="post">
        @csrf
        <div class="px-4 pb-3">
          <div class="row pb-3">
            <div class="col-2">Kehadiran: </div>
            <div class="col-10">
              <div class="form-check form-check-inline">
                <input required class="form-check-input" type="radio" name="kehadiran" id="opt-yes" value="yes">
                <label class="form-check-label" for="opt-yes">Hadir</label>
              </div>
              <div class="form-check form-check-inline">
                <input required class="form-check-input" type="radio" name="kehadiran" id="opt-maybe" value="maybe">
                <label class="form-check-label" for="opt-maybe">Mungkin Hadir</label>
              </div>
              <div class="form-check form-check-inline">
                <input required class="form-check-input" type="radio" name="kehadiran" id="opt-no" value="no">
                <label class="form-check-label" for="opt-no">Tidak Hadir</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <input required type="text" placeholder="Nama" class="form-control" name="name" value="">
          </div>
          <div class="form-group">
            <input type="text" placeholder="Alamat Daerah / Institusi" class="form-control" name="address" value="">
          </div>
          <div class="form-group">
            <textarea required class="form-control" placeholder="Ucapan" name="comments" rows="8" cols="80" maxlength="250"></textarea>
          </div>
        </div>
      </form>

      <div class="p-3">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" onclick="submitUcapan()">Kirim</button>
      </div>
    </div>
  </div>
</div>
