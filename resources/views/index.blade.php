<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Icon -->
  <link rel="shortcut icon" href="{{ asset('vite.svg') }}" type="image/x-icon">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
  {{--  todo: remove line below  --}}
  Testing public assets in laravel --- remove it!
  <div id="root"></div>
</body>

</html>
