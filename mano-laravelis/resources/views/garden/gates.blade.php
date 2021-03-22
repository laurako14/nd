@extends('layout.main')
@section('content')
<h1>Vartai i soda</h1>

@foreach(range(1,5) as $key => $value)
    


@if ($antras > 55)

{{ $pirmas }}

{{ $antras }} 

@endif

@endforeach

{{ $ketvirtas }}: {{ $pirmas }} ir {{ $antras }} rezultatas yra: {{ $trecias }}.<br><br>

@endsection


@section('title') Mano sodo vartai @endsection