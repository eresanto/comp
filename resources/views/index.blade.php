@extends ('layouts.master')


@section ('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

  <section class="row text-center placeholders">
    <div class="col-6 col-sm-3 placeholder" onclick="filtruj_tag('Sekcja filmowa', 1)" onmouseover="" style="cursor: pointer;">
      <i class="fa fa-film fa-5x" aria-hidden="true"></i>

      <h4>Sekcja filmowa</h4>
      <div class="text-muted">al. Niepodległości 24 <br>
      tel. 39 40</div>
    </div>
    <div class="col-6 col-sm-3 placeholder"  onclick="filtruj_tag('Sekcja prasowa', 1)" onmouseover="" style="cursor: pointer;">
      	<i class="fa fa-newspaper-o fa-5x"  aria-hidden="true"></i>
	<h4>Sekcja prasowa</h4>
      <span class="text-muted">Św. Marcin 78<br>tel. 44 21</span>
    </div>
    <div class="col-6 col-sm-3 placeholder" onclick="filtruj_tag('Sekcja promocji', 1)" onmouseover="" style="cursor: pointer;">
	<i class="fa fa-bullhorn fa-5x" aria-hidden="true"></i>

     <h4>Sekcja promocji</h4>
      <span class="text-muted">Św. Marcin 78<br> tel. 40 48 </span>
    </div>
    <div class="col-6 col-sm-3 placeholder" onclick="filtruj_tag('Życie uniwersyteckie', 1)" onmouseover="" style="cursor: pointer;">
     <i class="fa fa-book fa-5x" aria-hidden="true"></i>
	 <h4>"Życie Uniwersyteckie"</h4>
      <span class="text-muted">Św. Marcin 78<br>tel. 46 37 </span>
    </div>
  </section>

    <h2>Kompetencje pracowników </h2>
    <br>

    <div class="table-responsive">
      <table data-order='[[ 1, "asc" ]]' class="table table-striped" id="pracownicy">
        <thead>
          <tr>
            <th style="width:15%;" onclick="sortTable(0)">Nazwisko <i class="fa fa-sort" aria-hidden="true"></i></th>
        		<th style="width:10%;" onclick="sortTable(1)">Sekcja <i class="fa fa-sort" aria-hidden="true"></i></th>
            <th style="width:45%;">Obszary działania</th>
        		<th style="width:30%;">Kontakt</th>

          </tr>
        </thead>
      <tbody>
      <tr>
        <td>Pietrzykowski Adam</td>
    		<td>Sekcja filmowa</td>
        <td><span class=it_sm>Informatyka</span> <span class=it_sm>Strony WWW</span> <span class=it_sm>Streaming</span> <span class=foto_sm>Fotografia</span> </td>
    		<td>tel. 3946 apiet@amu.edu.pl</td>
      </tr>

      <tr>
        <td style="font-weight:bold;">Łakomy Michał</td>
    		<td>Sekcja filmowa</td>
        <td><span class=rozlicz_sm>Rozliczenia</span> <span class=grafika_sm>Zdjęcia</span></td>
    				<td>tel. 3940 mlakomy@amu.edu.pl</td>
      </tr>

      <tr>
        <td>Puppel Wojciech, Ph.D</td>
    		<td>Sekcja filmowa</td>
        <td><span class=grafika_sm>Grafika</span> <span class=grafika_sm>Animacja</span></td>
    		<td>tel. 3944 wpuppel@amu.edu.pl</td>
      </tr>

    	<tr>
        <td>Grzechowiak Ireneusz</td>
    		<td>Sekcja filmowa</td>
        <td><span class=grafika_sm>Zdjęcia</span> <span class=audio_sm>Dźwięk</span></td>
    		<td>tel. 3945 igrzech@amu.edu.pl</td>
      </tr>

      <tr>
        <td>Wala Katarzyna</td>
        <td>Sekcja filmowa</td>
        <td><span class=dzienn_sm>Dziennikarstwo</span> <span class=video_sm>Montaż</span></td>
        <td>tel. 3949 katwal@amu.edu.pl</td>
      </tr>

      <tr>
        <td>Łangowski Krzysztof</td>
        <td>Sekcja filmowa</td>
        <td><span class=audio_sm>Dźwięk</span> <span class=audio_sm>Postprodukcja dźwięku</span></td>
        <td>tel. 3947 langos@amu.edu.pl</td>
      </tr>

      <tr>
        <td>Żbik Natalia</td>
        <td>Sekcja filmowa</td>
        <td><span class=dzienn_sm>Dziennikarstwo</span> <span class=video_sm>Montaż</span></td>
        <td>tel. 3949 n.zbik@wp.pl</td>
      </tr>

      <tr>
        <td>Wojciechowski Michał</td>
        <td>Sekcja filmowa</td>
        <td><span class=grafika_sm>Grafika</span> <span class=grafika_sm>Animacja</span> <span class=video_sm>Montaż</span></td>
        <td>tel. 3944 micwoj9@amu.edu.pl</td>
      </tr>

      <tr>
        <td>Bernsdorff-Melanowicz Justyna</td>
        <td>Sekcja filmowa</td>
        <td><span class=video_sm>Montaż</span></td>
        <td>tel. 3943 jbm@amu.edu.pl </td>
      </tr>


      <tr>
          <td>Gronek Adrian</td>
          <td>Sekcja filmowa</td>
          <td><span class=video_sm>Zdjęcia</span> <span class=video_sm>Montaż</span> <span class=dzienn_sm>Dziennikarstwo</span> <span class=foto_sm>Fotografia</span></td>
          <td>tel. 3950 adrgro3@amu.edu.pl </td>
      </tr>

<!-- SEKCJA PRASOWA -->

      <tr>
        <td>Stanula Przemysław</td>
        <td>Sekcja prasowa</td>
        <td><span class=foto_sm>Fotografia</span></td>
        <td>tel. 4497 fbp@amu.edu.pl</td>
      </tr>

      <tr>
        <td>Śliwińska Aleksandra</td>
        <td>Sekcja prasowa</td>
        <td><span class=video_sm>Media</span></td>
        <td>tel. 4068 prasa@amu.edu.pl</td>
      </tr>


      </tbody>
    </table>
  </div>
</main>
</div>
</div>
@endsection
