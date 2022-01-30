@extends('base')

@section('content')
    <h2>Программа {{ $program->name }}</h2>
    <div>{{ $program->description  }}</div>
@endsection
