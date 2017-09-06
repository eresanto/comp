<!DOCTYPE html>
<html lang="en">


  <head>
    @include ('layouts.header')
  </head>


  <body onload="sortTable(0)">
      @include ('layouts.nav')

          @yield ('content')

      @include ('layouts.footer')
  </body>
</html>
