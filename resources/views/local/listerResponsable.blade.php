@extends('layouts.master2')
@section('title') Lister Responsable @endsection
@section('contenu')


<table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">CIN</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Email</th>
        <th scope="col">Telephone</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($responsables as $responsable)
            <tr>
        <th scope="row">{{ $responsable->id }}</th>
        <td>{{ $responsable->cinRespo}}</td>
        <td>{{ $responsable->nomRespo}}</td>
        <td>{{ $responsable->prenomRespo }}</td>
        <td>{{ $responsable->email}}</td>
        <td>{{ $responsable->teleRespo}}</td>
      </tr>
        @endforeach
      
      
    </tbody>
  </table>
    
@endsection