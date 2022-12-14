<div
  id="{{$id ?? ''}}"
  class="align-middle d-flex justify-content-end mb-3 cursor-pointer"
  data-toggle="modal"
  data-target="#{{ $isModal ? $id : '' }}"
>
  <div>
    <div class="bg-light mr-3 px-3 py-1 rounded text-dark">
      {{$label ?? ''}}
    </div>
  </div>
  <button type="button" class="bg-light border-0 rounded-circle fab-item">
    <i class="bi {{$icon ?? 'bi-info'}} icon"></i>
  </button>
</div>
