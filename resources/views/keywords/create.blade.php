@extends ('layouts.master')

@section ('content')

<main class="col-md-5" role="main">
  <br><br><br>
        <h2>Wprowadź nowe słowo kluczowe</h2>

<form method="post" action="/keywords">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Słowo kluczowe</label>
    <input type="text" class="form-control" id="kw" name="keyword" placeholder="słowo kluczowe" >
  </div>

    <label for="exampleInputEmail1">Kategoria słowa kluczowego</label>
  <select class="form-control" name="keyword_category" >
    <option value="1">Wideo</option>
    <option value="2">Audio</option>
    <option value="3">Informatyka</option>
    <option value="4">Administracja</option>
    <option value="5">Zarządzanie</option>
  </select>

  <br>
  <button type="submit" class="btn btn-primary">Wprowadź</button>
</form>


    @include ('layouts.errors')

  </main>

@endsection
