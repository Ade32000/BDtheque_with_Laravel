@extends('layout')

@section('title')

    BDthèque

    @endsection('title')

@section('content')

    @foreach($comic as $comics)

    <p>{{ $comic->comic_title }}</p>

    @endforeach

    @endsection('content')
