@extends('templates.base')
@section('title','Inicio')
@section('header','Inicio')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <p align="justify">
                Aqui puedes encontrar todos los Endpoints de la API Simpsons para que puedas probarlos y ver su funcionamiento.

                <br>
                Para ver la documentacion completa de la API visita el siguiente enlace:
                <a href="https://thesimpsonsapi.com/" target="_blank">https://thesimpsonsapi.com/</a>

                <br><br>
                ENDPOINTS PRINCIPALES:
                <br><br>
                * Personajes: -> <a href="https://thesimpsonsapi.com/api/characters
                " target="_blank">https://thesimpsonsapi.com/api/characters
                </a>
                <br><br>
                * Episodios:  -> <a href="https://thesimpsonsapi.com/api/episodes
                " target="_blank">https://thesimpsonsapi.com/api/episodes
                </a>
                <br><br>
                * Ubicaciones:  -> <a href="https://thesimpsonsapi.com/api/locations
                " target="_blank">https://thesimpsonsapi.com/api/locations
                </a>
                
            </p>
        </div>

    </div>

@endsection