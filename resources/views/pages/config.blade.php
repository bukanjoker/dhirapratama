<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <form action="/config/{{ $config->key }}" method="post" style="padding-bottom: 24px;">
        @csrf
        <input type="text" name="value" placeholder="{{ $config->label }}" value="{{ $config->value ?? '' }}">
        <button type="submit">Submit</button>
      </form>
      @if($config->key == 'youtube')
        <a href="{{ $config->value }}" target="_blank">link test</a>
      @endif
    </div>
  </body>
</html>
