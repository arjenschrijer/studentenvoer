@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Recept Toevoegen</div>

                    <div class="panel-body">
                        <form action="/recipe/add" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Titel</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Titel">
                            </div>
                            <div class="form-group">
                                <label for="subtitle">Sub-Titel</label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle"
                                       placeholder="Sub-Titel">
                            </div>
                            <div class="form-group">
                                <label for="steps">Stappen</label>
                                <textarea type="text" class="form-control" id="steps" name="steps"
                                          placeholder="Stappen"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ingredients">Ingredi&euml;nten</label>
                                <textarea type="text" class="form-control" id="ingredients" name="ingredients"
                                          placeholder="Ingredi&euml;nten"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="time">Tijd In Minuten</label>
                                <input type="number" class="form-control" id="time" name="time"
                                       placeholder="Tijd In Minuten">
                            </div>
                            <div class="form-group">
                                <label for="persons">Aantal Personen</label>
                                <input type="number" class="form-control" id="persons" name="persons"
                                       placeholder="Aantal Personen">
                            </div>
                            <div class="form-group">
                                <label for="image">Afbeelding</label>
                                <input type="text" class="form-control" id="image" name="image"
                                       placeholder="Afbeelding">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
