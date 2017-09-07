@extends ('layouts.master')

@section ('content')

Słowa kluczowe w bazie:
<ul>
    @foreach ($keywords as $keyword)
        <li><span class="video_sm">{{ $keyword}}</span></li>
    @endforeach
</ul>

@endsection
