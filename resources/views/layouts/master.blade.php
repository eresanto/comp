<!DOCTYPE html>
<html lang="en">


  <head>
    @include ('layouts.header')
  </head>


  <body onload="sortTable(0)">
      @include ('layouts.nav')

      <div class="container-fluid">
        <div class="row">
            @include ('layouts.sidebar')
            @yield ('content')
            @include ('layouts.footer')
    </div>
   </div>

  </body>
</html>
