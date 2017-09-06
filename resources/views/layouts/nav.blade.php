<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="navbar-brand">CENTRUM MARKETINGU UAM</div>
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link">Kompetencje <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="http://150.254.67.215:8181/kalendarz_cm/calendar.php">Kalendarz</a>
      </li>

    </ul>
    <form class="form-inline mt-2 mt-md-0">
      <input id="myInput" onkeyup="myFunction()"  class="form-control mr-sm-2" type="text" placeholder="np. montaż" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Szukaj</button>
    </form>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item active">
          <a class="nav-link all" href=""  onclick="filtruj_tag('')">WSZYSTKIE <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link dzienn" href="#dziennikarstwo" onclick="filtruj_tag('dziennikarstwo')">#Dziennikarstwo</a>
        </li>


        <li class="nav-item">
          <a class="nav-link video" href="#wideo" onclick="filtruj_tag('zdjęcia')">#Zdjęcia</a>
        </li>

        <li class="nav-item">
          <a class="nav-link video" href="#wideo" onclick="filtruj_tag('montaż')">#Montaż</a>
        </li>


        <li class="nav-item">
          <a class="nav-link grafika" href="#wideo" onclick="filtruj_tag('grafika')">#Grafika</a>
        </li>

        <li class="nav-item">
          <a class="nav-link grafika" href="#wideo" onclick="filtruj_tag('animacja')">#Animacja</a>
        </li>

        <li class="nav-item">
          <a class="nav-link foto" href="#wideo" onclick="filtruj_tag('fotografia')">#Fotografia</a>
        </li>

        <li class="nav-item"  class=audio>
          <a class="nav-link rozlicz" href="#rozliczenia" onclick="filtruj_tag('rozliczenia')">#Rozliczenia</a>
        </li>


                <li class="nav-item">
                  <a class="nav-link audio" href="#audio" onclick="filtruj_tag('dźwięk')">#Dźwięk</a>
                </li>

                <li class="nav-item">
                      <a class="nav-link audio" href="#postaudio" onclick="filtruj_tag('postprodukcja dźwięku')">#Postprodukcja dźwięku</a>
                </li>



        <li class="nav-item">
          <a class="nav-link it" href="#it" onclick="filtruj_tag('Informatyka')">#Informatyka</a>
        </li>
        <li class="nav-item">
          <a class="nav-link it" href="#it" onclick="filtruj_tag('WWW')">#Strony WWW</a>
        </li>
        <li class="nav-item">
          <a class="nav-link it" href="#wideo" onclick="filtruj_tag('streaming')">#Streaming</a>
        </li>








      </ul>
    </nav>
