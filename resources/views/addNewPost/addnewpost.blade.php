@extends('components.layout')

@section('content')
    <h1 class="text-center py-4">Aggiungi una nuova post</h1>


    {{-- Output Error in mancanza di dati --}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" style="width: 50%; margin-left: 26%; height: 60px;">
                <ul>
                    <li>{{$error}}</li>
                </ul>
            </div>
        @endforeach
        
    @endif

    {{-- Form Aggiungi Post --}}

    <div class="container py-4" style="margin-left: 25%;">
        <div class="row">
            <div class="col12">
                <h5>
                    * campi obbligatori
                </h5>
            </div>
        </div>
    </div>
    <div class="container" style="width: 50%">
        <form action="/aggiungi" method="post" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo *</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Inserisci un Titolo">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Contenuto *</label>
                    <textarea class="form-control" id="content" name="content" rows="3">{{ old('content') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image">
                </div>
                <button type="submit" class="btn btn-primary mb-3" value="Aggiungi">Upload</button>
        </form>
    </div>


    
@endsection