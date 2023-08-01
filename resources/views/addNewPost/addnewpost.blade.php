@extends('components.layout')

@section('content')
    <h1 class="text-center py-4">Aggiungi una nuova post</h1>

    <div class="container" style="width: 50%">
        <form action="/aggiungi" method="post" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci un Titolo">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Contenuto</label>
                    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image">
                </div>
                <button type="submit" class="btn btn-primary mb-3" value="Aggiungi">Upload</button>
        </form>
    </div>


    
@endsection