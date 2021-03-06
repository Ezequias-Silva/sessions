<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
  </head>
  <body>

    <div class="container">

      <div class="pager-header">
        <h1>@yield('pager-header-content')</h1>

      </div>

      @if (Session::has('mensagem'))
      <div class="aler alert-sucess" role="alert">
        {{ Session::get('mensagem')}}
      </div>
      @endif

      @yield('content')

    </div>

    <script type="text/javascript" src="/js/app.js">

    </script>
    @yield('scripts')

  </body>
</html>
