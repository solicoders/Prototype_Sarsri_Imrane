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
                            <h3 class="card-title">Edit Tâche</h3>
                        </div>
                        <form action="{{ route('groupes.update', ['groupe' => $groupe]) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="school_years_id">school years <span class="text-danger">*</span></label>
                                    <select id="school_years_id" name="school_years_id" class="custom-select">
                                        @foreach ($School_years_filter as $School_year_filter)
                                            <option {{-- @selected($School_year_filter->id == $tâch->School_year_filter->id) --}} value="{{ $School_year_filter->id }}"
                                                name="{{ $School_year_filter->id }}">
                                                {{ $School_year_filter->start_date }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="Group_number">Group number <span class="text-danger">*</span></label>
                                    <input type="text" name="Group_number"
                                        class="form-control @error('Group_number') border-danger @enderror"
                                        value="{{ $groupe->Group_number }}" id="Group_number"
                                        placeholder="Enter le name de Group number">
                                    @error('Group_number')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="Reference">Référence</label>
                                    <textarea id="Reference" class="form-control" name="Reference" rows="3" placeholder="Entre un Reference ">{{ $groupe->Reference }}</textarea>
                                </div>
                                @error('Reference')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>

                            <div class="card-footer">
                                <a href="{{ route('groupes.index') }}" class="btn btn-default">annuler</a>
                                <button type="submit" class="btn btn-primary">update</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
