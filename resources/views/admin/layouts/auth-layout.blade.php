
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title', 'Blog laravel')</title>
    <!-- CSS files -->
    <link href="{{ asset('admin/dist/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/dist/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/dist/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/dist/css/demo.min.css') }}" rel="stylesheet"/>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
       @yield('content')
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('admin/dist/js/tabler.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/demo.min.js') }}"></script>
  </body>
</html>
