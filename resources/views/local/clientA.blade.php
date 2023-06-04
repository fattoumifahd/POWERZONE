@extends('layouts.master2')
@section('title')Client non Validé @endsection

@section('contenu')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Numero d'inscription</th>
        <th scope="col">CIN</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Ville</th>
        <th scope="col">Telephone</th>
        <th scope="col">Opération</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($clientA as $client)
            <tr>
        <th scope="row">{{ $client->id }}</th>
        <td>{{ $client->cin}}</td>
        <td>{{ $client->nomClient}}</td>
        <td>{{ $client->prenomClient }}</td>
        <td>{{ $client->ville}}</td>
        <td>{{ $client->tele}}</td>
        <td> 
          <a href="#"> Payer </a>
          <a href="#"> Modifier </a> </td>
      </tr>
        @endforeach
      
      
    </tbody>
  </table>
    
@endsection