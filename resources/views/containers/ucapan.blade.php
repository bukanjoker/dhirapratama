<div class="section">
  <h4 class="font-styled">Kiriman Ucapan:</h4>
  <div id="card-rsvp" class="card-rsvp">
    @foreach ($ucapans as $ucapan)
      <div class="pb-2">
        <div>
          <span class="nama">{{$ucapan->name}}</span>
          @if ($ucapan->address)
            <b>• {{$ucapan->address}}</b>
          @endif
        </div>
        <i>{{$ucapan->comments}}</i>
      </div>
    @endforeach
  </div>
</div>
