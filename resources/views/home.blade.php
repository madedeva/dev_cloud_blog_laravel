
@extends('layouts.main')

@section('container')

@foreach($home as $home)

<h3>{{ $home["nama"] }}</h3>
<h3>{{ $home["nim"] }}</h3>

@endforeach

@endsection
 