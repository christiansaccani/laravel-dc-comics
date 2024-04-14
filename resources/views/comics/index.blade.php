@extends('layouts/app')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Artisti</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>

        @foreach ($comics as $comic)
            
        <tr>
            <td>{{$comic->title}}</td>
            <td>{{$comic->artists}}</td>
            <td><a href="" class="btn btn-info">Visualizza</a></td>
        </tr>

        @endforeach
        
      

    </tbody>
  </table>

@endsection