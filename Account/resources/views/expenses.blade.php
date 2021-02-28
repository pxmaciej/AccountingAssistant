@extends('layouts.app')

@section('content')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center py-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Dodaj Pliki z Fakturami</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('uploadExpenses.store')}}">
                        @csrf
                        <div class="form-group">
                            @if(Session::has('file_created'))
                            <h5 class="text-success">{{Session::get('file_created')}}</h5>
                            @endif
                          <label for="exampleFormControlFile1">Wybierz pliki z fakturami ZIP</label>
                          <input type="file" class="form-control-file" name="uploadedfile">
                        </div>
                </div>
                         <button type="submit" class="btn btn-primary">Wyślij Film</button>
                      </form>
            </div>
        </div>
     </div>
</div>

@endsection
