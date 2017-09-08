@extends ('layouts.master')

@section ('content')

Słowa kluczowe w bazie:


<ul>
    @foreach ($keywords as $keyword)
        <li>
           {{ $keyword->pluck('keyword_category')->first() }}

            @foreach ($keyword as $key)
                <span class="video_sm">{{ $key->keyword }}</span>
            @endforeach

            </li>
    @endforeach
</ul>

@endsection
