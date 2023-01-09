<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Icon -->
  <link rel="shortcut icon" href="{{ secure_asset('vite.svg') }}"
    type="image/x-icon">
  <!-- Scripts -->
  <script type="module" defer src="{{ secure_asset('js/index-e17e2e10.js') }}"></script>
  <!-- Styles -->
  <link href="{{ secure_asset('css/index-333575ea.css') }}" rel="stylesheet">

</head>

<body>
  <div id="root"></div>
</body>

</html>
