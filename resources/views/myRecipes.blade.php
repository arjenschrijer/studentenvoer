@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Recepten</div>

                    <div class="panel-body">
                        @foreach($recipes as $recipe)
                            <a class="recipe-link" href="/recipe/{{ $recipe->id }}">
                                <div class="panel panel-default">
                                    <div class="panel-heading">{{ $recipe->title }}</div>

                                    <div class="panel-body">
                                        <b>Ingredienten:</b> {!! str_replace("\n", ', ', $recipe->ingredients) !!}<br/>
                                        <b>Tijd:</b> {{ $recipe->time }} minuten
                                    </div>

                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
