<!DOCTYPE html>
<html lang="en">

  <head>
    @include ('layouts.header')
  </head>

  <body onload="sortTable(0)">
      @include ('layouts.nav')

      <div class="container-fluid">


            @yield ('content')
            @include ('layouts.footer')
            @yield ('custom_js')
    </div>
   

  </body>
</html>
