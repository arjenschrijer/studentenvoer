@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>{{ $recipe->title }}<br/><small>{{ $recipe->subtitle }}</small></h1></div>

                    <img src="{{ $recipe->image }}" class="img-responsive">

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Personen</th>
                                    <td>{{ $recipe->persons }}</td>
                                </tr>
                                <tr>
                                    <th>Tijd</th>
                                    <td>{{ $recipe->time }} minuten</td>
                                </tr>
                            </table>
                        </div>

                        <h3>Ingredi&euml;nten</h3>
                        <p>
                            {!! nl2br(e($recipe->ingredients)) !!}
                        </p>

                        <h3>Stappen</h3>
                        <p>
                            {!! str_replace("\n", '<br/>', nl2br(e($recipe->steps))) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
