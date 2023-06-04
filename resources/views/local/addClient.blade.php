@extends('layouts.master2')
@section('title') Ajouter @endsection
  @section('contenu')

  <div class="container">
    <div class="row pt-4">
      <form action="{{ route('add_Client') }}" method="POST" class="form horizontal col-md-6 pt-4">
        @csrf
        <div class="form-group"> 
          <div class="form-group">
          <label class="col-sm-4 control-label">CIN</label>
          <div class="com-sm-10">
          <input type="text" class="form-control" name="cin" placeholder="CIN">
          </div>
        </div>

          <label class="col-sm-4 control-label">Nom</label>
          <div class="com-sm-10">
          <input type="text" class="form-control" name="nomClient" placeholder="Nom">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label">Prénom</label>
          <div class="com-sm-10">
          <input type="text" class="form-control" name="prenomClient" placeholder="Prénom">
          </div>
        </div>
       
        <div class="form-group">
          <label class="col-sm-4 control-label">Numero de téléphone</label>
          <div class="com-sm-10">
          <input type="text" class="form-control" name="tele" placeholder="+212 6000000">
          </div>
        </div>
        <div class="form-group">
          <input type="hidden" name="salle_id" value="{{ $salles->id }}" >
          <label class="col-sm- control-label">Ville</label>
          <div class="com-sm-10">
          <select class="form-select " name="ville" >
          <option selected>Ville</option>
          <option value="rabat">Rabat</option>
          <option value="sale">Sale</option>
          <option value="temara">Temara</option>
          <option value="autres">Autres</option>
          </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm- control-label">Abonnement</label>
          <div class="com-sm-10">
          <select class="form-select " name="type" >
          <option selected>choisissez votre abonnement</option>
          <option value="mensuelle">Mensuelle</option>
          <option value="trimestrielle">Trimestrielle</option>
          <option value="annuelle">Annuelle</option>
          </select>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-6 control-label">choisissez la date de début :</label>
          <div class="com-sm-10">
          <input type="date" class="form-control" name="dateD" placeholder="j/m/a">
          </div>
        </div>
        <div class="form-groupe">
          <input class="form-check-input" type="radio" name="payer" value='1' >
          <label class="form-check-label" > Payer  </label>
          <input class="form-check-input" type="radio" name="payer"  value='0'>
          <label class="form-check-label" > Plus tard </label>
        </div>
        
        <div class="pt-4">
          <input type="submit" class="btn btn-primary m-3" name="submit" value="Ajouter">
        </div>
      </form>
    </div>
  </div>
  @endsection
  
