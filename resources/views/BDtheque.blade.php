@extends('layout')

@section('title')

    BDthèque

@endsection

@section('content')

    <table>
        <thead>
            <tr>
                @foreach($image as $image)

                    <th>
                        <form action="Fiche" method="get">
                            <button class="img_bd" type="submit" name="imgId" value="{{$image->image_id}}">
                                <img src="{{$image->image_src}}">
                            </button>
                        </form>
                    </th>

                @endforeach
            </tr>
        </thead>

        <tbody>
            <tr>
                @foreach($comic as $comic)

                    <td>{{ $comic->comic_title }}</td>

                @endforeach
            </tr>
        </tbody>
    </table>
@endsection
