@extends('layout')

@section('title')

	Fiche produit

@endsection

@section('content')


<div id="fiche_content" class="fiche">

	<div id="fiche_left">

		@foreach ($bd as $bd)

			<h2>{{$bd->comic_title}}</H2>

				@foreach ($image as $image)

					<img id="img_fiche" src="{{$image->image_src}}">

					
						<div id="resume">
							
							<h6>Résumé :</h6>

							{{$bd->comic_resume}}

						</div>

				@endforeach

		@endforeach

		<button class="fiche" id="favorite" name="favorite">Ajouter à mes favoris</button>

	</div>

		
	<div id="fiche_right">
			
		<h5>Dans la même collection :</h5>

	</div>

</div>

@endsection

