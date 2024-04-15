@extends('layouts/app')

@section('content')

<div class="container py-5">


    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" name="description" id="description" aria-describedby="emailHelp" required></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" id="series" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control" name="artists" id="artists" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control" name="writers" id="writers" aria-describedby="emailHelp">
        </div>
        
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>

</div>

@endsection