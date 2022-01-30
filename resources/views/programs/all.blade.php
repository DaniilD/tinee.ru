@extends('base')

@section('content')
    <h2>Программы</h2>
    <ul>
        @foreach($programs as $program)
            <li>
                <div class="">
                    <a href="/program/{{$program->id}}"><div>{{ $program->name  }}</div></a>
                    <div> {{ $program->shortDescription  }}</div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
