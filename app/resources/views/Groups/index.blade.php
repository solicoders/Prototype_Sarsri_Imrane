@extends('Layouts.Layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Liste des Groupes</h1>
                </div>
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a href="{{ route('groupes.create') }}" class="btn btn btn-primary">Ajouter tâche</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            {{-- start alert --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success </strong> {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            {{-- end alert --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ">
                            {{-- filter --}}
                            <div class="row d-flex justify-content-between">
                                <div class="col-4">
                                    <div class="input-group">
                                        <label class="input-group-text" for="filterSelectSchoolYears"><i
                                                class="fas fa-filter"></i></label>
                                        <select class="form-select form-control" id="filterSelectSchoolYears"
                                            aria-label="Filter Select">
                                            <option value="Filtrer par Années scolaires">Filtrer par Années scolaires
                                            </option>
                                            @foreach ($School_years_filter as $School_year_filter)
                                                <option value="{{ $School_year_filter->id }}"
                                                    name="{{ $School_year_filter->id }}">
                                                    {{ $School_year_filter->start_date }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="input-group col-md-3">
                                    <input type="text" class="form-control" placeholder="Recherche"
                                        aria-label="Recherche" aria-describedby="basic-addon1" id="search-input">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                        <div id="search_ajax">
                            @include('Groups.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('jquery_script')
    <script>
        $(document).ready(function() {

            function fetchData(page, NumeroDeGroupe, selectSchoolYears) {
                $.ajax({
                    url: 'groupes/?page=' + page + '&NumeroDeGroupe=' + NumeroDeGroupe +
                        '&selectSchoolYears=' +
                        selectSchoolYears,
                    success: function(data) {
                        $('tbody').html('');
                        $('tbody').html(data);
                        // console.log(data);
                    }
                });
                console.log(page);
                console.log(NumeroDeGroupe);
                console.log(selectSchoolYears);
            }

            $('body').on('click', '.pagination a', function(e) {

                e.preventDefault();

                let page = $(this).attr('href').split('page=')[1];
                let NumeroDeGroupe = $('#search-input').val();
                let selectSchoolYears = $('#filterSelectSchoolYears').val();
                // console.log($(this).attr('href').split('page=')[1]);
                // console.log($(this).attr('href'));
                fetchData(page, NumeroDeGroupe, selectSchoolYears);

            });

            $('body').on('keyup', '#search-input', function() {
                let page = $('#page').val();
                let NumeroDeGroupe = $('#search-input').val();
                let selectSchoolYears = $('#filterSelectSchoolYears').val();

                fetchData(page, NumeroDeGroupe, selectSchoolYears);
            });

            $('#filterSelectSchoolYears').on('change', function() {
                let page = $('#page').val();
                let NumeroDeGroupe = $('#search-input').val();
                let selectSchoolYears = $(this).val();
                fetchData(page, NumeroDeGroupe, selectSchoolYears);
            });
        });
    </script>
@endsection
