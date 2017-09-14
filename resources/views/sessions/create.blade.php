@extends ('layouts.master')

@section ('content')

    <div class="col-md8">
        <h1>sign in</h1>
    </div>

    <form class="" action="/login" method="post">
            {{ csrf_field() }}

        <div class="form-group">
            <label for="password">Hasło</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button type="submit" name="button" class="btn btn-primary">Zaloguj</button>
        </div>
        @include ('layouts.errors')
    </form>

@endsection
