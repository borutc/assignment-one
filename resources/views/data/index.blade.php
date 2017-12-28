@extends('layouts.app')

@section('content')
    <h1>Data page</h1>
    <div>
        <a href="{{route('home')}}">Back</a>
    </div>
    {{ $text }}
@endsection
