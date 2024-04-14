@extends('layouts/app')

@section('content')
    
<div class="container py-5">
    <h1 class="mb-5">{{$comic->title}}</h1>

    <div class="row">
        <div class="col-6">
            <img class="mb-3 w-100" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>

        <div class="col-6">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Descrizione</td>
                        <td>{{$comic->description}}</td>
                    </tr>
                    <tr>
                        <td>Prezzo</td>
                        <td>{{$comic->price}}</td>
                    </tr>
                    <tr>
                        <td>Serie</td>
                        <td>{{$comic->series}}</td>
                    </tr>
                    <tr>
                        <td>Data di pubblicazione</td>
                        <td>{{$comic->sale_date}}</td>
                    </tr>
                    <tr>
                        <td>Tipo</td>
                        <td>{{$comic->type}}</td>
                    </tr>
                    <tr>
                        <td>Artisti</td>
                        <td>{{$comic->artists}}</td>
                    </tr>
                    <tr>
                        <td>Scrittori</td>
                        <td>{{$comic->writers}}</td>
                    </tr>
                  
                </tbody>
            </table>
        </div>
    </div>
        

    
    
</div>

@endsection