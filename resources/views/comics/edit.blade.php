@extends('layouts/app')

@section('content')

<div class="container py-5">

    <h1>Modifiche</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf

        @method ('PUT')
        
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" value="{{$comic->title}}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" name="description" id="description" aria-describedby="emailHelp" rows="5" required>{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="emailHelp" value="{{$comic->thumb}}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" aria-describedby="emailHelp" value="{{$comic->price}}" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" id="series" aria-describedby="emailHelp" value="{{$comic->series}}" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="emailHelp" value="{{$comic->sale_date}}" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="emailHelp" value="{{$comic->type}}" required>
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control" name="artists" id="artists" aria-describedby="emailHelp" value="{{$comic->artists}}">
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control" name="writers" id="writers" aria-describedby="emailHelp" value="{{$comic->writers}}">
        </div>
        
        <button type="submit" class="btn btn-warning">Modifica</button>
    </form>

</div>

@endsection