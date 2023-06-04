@extends('layouts.master2')
@section('title')Client Payé @endsection

@section('contenu')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Numero d'inscription</th>
        <th scope="col">CIN</th>
        <th scope="col">Nom Complet</th>
        <th scope="col">Ville</th>
        <th scope="col">Telephone</th>
        <th scope="col">Date Début</th>
        <th scope="col">Date Fin</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($clientP as $client)
            <tr>
        <th scope="row">{{ $client->id }}</th>
        <td>{{ $client->cin}}</td>
        <td>{{ $client->nomClient}} {{ $client->prenomClient }}</td>
        <td>{{ $client->ville}}</td>
        <td>{{ $client->tele}}</td>
        <td>{{ $client->abonnements->dateD}} </td>
        <td>{{ $client->abonnements->dateF}} </td>
        <td> <a href="#" >Renouveller </a> </td>
      </tr>
        @endforeach
      
      
    </tbody>
  </table>
    
@endsection