@extends('layout.template')

@section('content')
@foreach ($dosen as $dos)
<h1>{{($dos['nip'])}}</h1>
<h1>{{($dos['nama'])}}</h1>
<h1>{{($dos['matkul'])}}</h1>
<br>

@endforeach

@endsection
