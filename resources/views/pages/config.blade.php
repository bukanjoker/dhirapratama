<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <form action="/config/{{ $config->key }}" method="post">
        @csrf
        <input type="text" name="value" placeholder="{{ $config->label }}" value="{{ $config->value ?? '' }}">
        <button type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>
