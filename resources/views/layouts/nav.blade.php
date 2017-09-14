<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="navbar-brand"><a href="/"> CENTRUM MARKETINGU UAM</a></div>
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    @if (Auth::check())
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">

      <ul class="nav">
      <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Słowa kluczowe</a>
                 <div class="dropdown-menu" aria-labelledby="dropdown01">
                   <a class="dropdown-item" href="/keywords/create">Dodaj słowo kluczowe</a>
                   <a class="dropdown-item" href="/keywords">Pokaż słowa kluczowe</a>
                 </div>
        </li>

        <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pracownicy</a>
                   <div class="dropdown-menu" aria-labelledby="dropdown01">
                     <a class="dropdown-item" href="/pracownicy/create">Dodaj pracownika</a>
                     <a class="dropdown-item" href="/pracownicy">Edytuj pracowników</a>
                   </div>
          </li>
          <li class="nav-item dropdown">

               <a href="/logout" class="nav-link dropdown"><span class="glyphicon glyphicon-log-out"></span> wyloguj</a>
           </li>
      </ul>
  </div>
    @endif

    @if (!Auth::check())
     <div class="collapse navbar-collapse" id="navbarsExampleDefault">
         <ul class="nav">
             <li class="nav-item dropdown">
                 <a href="/login" class="nav-link dropdown"><span class="glyphicon glyphicon-log-in"></span> login</a>
             </li>
         </ul>
     </div>
    @endif

    <form class="form-inline col-sm-3">
      <input id="myInput" onkeyup="myFunction()"  class="form-control" type="text" placeholder="np. montaż" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Szukaj</button>
    </form>

</div>
</nav>
