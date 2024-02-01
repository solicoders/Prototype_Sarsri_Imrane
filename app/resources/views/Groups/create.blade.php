@extends('Layouts.Layout')
@section('content')
    <div class="content-header">
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ajouter Une Groupe</h3>
                        </div>
                        <form action="{{ route('groupes.store') }}" method="post">
                            @csrf
                            @method('post')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="school_years_id">Start date <span class="text-danger">*</span></label>
                                    <select name="school_years_id" id="school_years_id" class="custom-select">
                                        @foreach ($School_years_filter as $School_year_filter)
                                            <option value="{{ $School_year_filter->id }}">
                                                {{ $School_year_filter->start_date }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Group_number">Group Number<span class="text-danger">*</span></label>
                                    <input name="Group_number" type="text"
                                        class="form-control @error('Group_number') border-danger @enderror"
                                        id="Group_number" placeholder="Enter le name de Tâche"
                                        value="{{ old('Group_number') }}">
                                    @error('Group_number')
                                        <p class="text-danger"> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="">Reference <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('Reference') border-danger @enderror" name="Reference" rows="3"
                                        placeholder="Entre un Reference">{{ old('Reference') }}</textarea>
                                    @error('Reference')
                                        <p class="text-danger"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('groupes.index') }}" class="btn btn-default">Annuler</a>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
