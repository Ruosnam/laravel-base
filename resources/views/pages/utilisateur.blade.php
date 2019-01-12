@extends('layout.app')
           
        @section('content')
            <div class="content">
                <div class="title m-b-md">
                    GESTION D'UTILISATEUR
                </div>

            </div>
            <div class="content">
                <div class="title m-b-md">
                    @foreach($nom_user as $nom_users)
                        {{$nom_users}}
                    @endforeach
                </div>
            </div>
        @endsection