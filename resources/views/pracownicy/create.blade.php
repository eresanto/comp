@extends ('layouts.master')

@section ('content')

<main class="col-md-5" role="main">
  <br><br>
        <div class="container">

            <form class="form-horizontal" role="form" method="post" action="/pracownicy">
                        {{ csrf_field() }}
                        <h2>Dodaj pracownika</h2>
                        <div class="form-group">
                            <label for="firstName" class="col-sm-3 control-label">Imię</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" id="firstName" placeholder="Name" class="form-control" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastName" class="col-sm-3 control-label">Nazwisko</label>
                            <div class="col-sm-9">
                                <input type="text" name="surname" id="firstName" placeholder="SurName" class="form-control" autofocus>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="country" class="col-sm-3 control-label">Sekcja</label>
                            <div class="col-sm-9">
                                <select id="country" class="form-control" name="section">
                                    <option>Sekcja filmowa</option>
                                    <option>Sekcja promocji</option>
                                </select>
                            </div>
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tel" class="col-sm-3 control-label" name="tel">Telefon</label>
                            <div class="col-sm-9">
                                <input id="email" name="tel" placeholder="Tel" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-primary btn-block">Dodaj</button>
                            </div>
                        </div>
                    </form> <!-- /form -->
                </div> <!-- ./container -->

    @include ('layouts.errors')

</main>

@endsection
