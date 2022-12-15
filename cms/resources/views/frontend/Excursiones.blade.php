@extends('welcome')

@section('content')

<div class="row">
    
    <h1 class="text-center text-info"><b>Categoría: {{ $categoria -> nombre }}</b></h1>

</div>

<div class="row" id="articulos">
            
        <hr>

            <h1 class="text-center text-info"><b>EXCURSIONES</b></h1>

        <hr>

            <ul>

                @foreach($excursiones as $excursion)

                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <img src="http://localhost/Proyecto/cms/public/storage/{{ $excursion->portada }}" class="img-thumbnail">
                    <h1>{{ $excursion->titulo }}</h1>
                    <p>{{ $excursion->descripcion }}</p>
                    <a href="{{ url('Excursion/'.$excursion->id) }}">
                    <button class="btn btn-default">Leer Más</button>
                    </a>

                    <hr>

                </li>

                @endforeach  

            </ul>

</div>

@endsection