@extends('Layouts.Layout')
@section('content')
    <div class="content-header">
    </div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="card-title">Détail s de {{ $groupe->Group_number }}</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right" href="{{ route('groupes.index') }}">Retour</a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <label for="nom">Group Number: </label>
                        <p>{{ $groupe->Group_number }}</p>
                    </div>
                    <div class="col-sm-12">
                        <label for="nom">Nom du projet: </label>
                        {{-- <p>{{ $Group->project->name }}</p> --}}
                        <p>{{ $groupe->school_years_id }}</p>
                    </div>
                    <div class="col-sm-12">
                        <label for="description">Description: </label>
                        <p>{{ $groupe->Reference }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
