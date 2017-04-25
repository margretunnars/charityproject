
<!DOCTYPE html>
<html>
  <head>
    @include('partials/_head')

  </head>
  <body>

    @include('partials/_header')

    @include('partials._messages')
  
    @yield('content')

    @include('partials/_footer')
          
    </div> <!-- end of wrapper -->
  </body>
</html>