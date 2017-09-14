@extends ('layouts.master')

@section ('content')

<div class="table-responsive">
  <table class="table table-striped" id="pracownicy">
    <thead>
        <tr>
          <th style="width:15%;">Imię i nazwisko </th>
              <th style="width:10%;" onclick="sortTable(1)">Sekcja <i class="fa fa-sort" aria-hidden="true"></i></th>
          <th style="width:50%;">Obszary działania</th>e
              <th style="width:20%;">Kontakt</th>
        </tr>
      </thead>
    <tbody>

    @foreach ($pracownicy as $pracownik)
    <tr>
        <td>  {{ $pracownik->name }} {{ $pracownik->surname }}  </td>
        <td> {{ $pracownik->section }}   </td>
        <td>

              <!-- <select class="js-basic-multiple" multiple="multiple" data-max-options="7">
              </select> -->

              <form action="{{ url('/pracownicy/add', ['id' => $pracownik->id]) }}" method="post">
                  <select class="selectpicker" multiple title="Wskaż kompetencje" data-max-options="7" name="keyword[]">
                      @foreach ( \App\keyword::get() as $keyword)
                        <option value="{{ $keyword['id'] }}">
                                {{ $keyword['keyword'] }}
                        </option>
                    @endforeach
                  </select>
                  <button type="submit" class="btn btn-primary">Dodaj</button>
                  <input type="hidden" name="_method" value="post" />
                      {!! csrf_field() !!}
              </form>

             @foreach ($pracownik->keywords as $key)
                <div class=video_sm>{{ $key->keyword }}
                    {{ $keyword['id'] }}
                            <button class="glyphicon glyphicon-trash" data-id="{{ $pracownik->id }}" data-token="{{ csrf_token() }}" >
                            </button>
                            <input type="hidden" name="_method" value="delete" />
                 </div>
             @endforeach
         </td>
        <td> {{ $pracownik->email }} {{ $pracownik->tel }}   </td>
        <td class="center">
            <form action="{{ url('/pracownicy/del', ['id' => $pracownik->id]) }}" method="post">
                    <button class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                    <input type="hidden" name="_method" value="delete" />
                    {!! csrf_field() !!}
            </form>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>

@endsection

@section ('custom_js')
<script>
        $(document).ready(function() {
            $('.js-basic-multiple').select2();
        });
</script>

@endsection
