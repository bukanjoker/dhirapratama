<div id="{{$id ?? ''}}" class="align-middle d-flex justify-content-end mb-3 cursor-pointer">
  <div>
    <div class="bg-light mr-3 px-3 py-1 rounded text-dark">
      {{$label ?? ''}}
    </div>
  </div>
  <button type="button" class="bg-light border-0 h6 pb-1 rounded-circle">
    <i class="bi {{$icon ?? 'bi-info'}} icon"></i>
  </button>
</div>
