@extends('layout')

@section('title')

    Fiche produit

@endsection

@section('content')
    


        @foreach ($bd as $bd)

            <div>{{$bd->comic_title}}</div>
            
            @foreach ($image as $image)

                <div><img src="{{$image->image_src}}"><div>
                    
            @endforeach

        @endforeach


@endsection