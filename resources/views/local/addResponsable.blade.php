@extends('layouts.master2')
@section('contenu')
<div class="container">
    <div class="row pt-4">
      <form action="{{ route('add_Responsable') }}" method="POST" class="form horizontal col-md-6 pt-4">
        @csrf
        <div class="form-group"> 
          <div class="form-group">
            <input type="hidden" name="salle_id" value="{{ $salles->id }}" >
          <label class="col-sm-4 control-label">CIN</label>
          <div class="com-sm-10">
          <input type="text" class="form-control" name="cinRespo" placeholder="CIN">
          </div>
        </div>

          <label class="col-sm-4 control-label">Nom</label>
          <div class="com-sm-10">
          <input type="text" class="form-control" name="nomRespo" placeholder="Nom">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label">Prénom</label>
          <div class="com-sm-10">
          <input type="text" class="form-control" name="prenomRespo" placeholder="Prénom">
          </div>
        </div>
       
        <div class="form-group">
          <label class="col-sm-4 control-label">Numero de téléphone</label>
          <div class="com-sm-10">
          <input type="text" class="form-control" name="teleRespo" placeholder="+212 6000000">
          </div>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Email</label>
          <input type="email" class="form-control" name="email" placeholder="exemple@ex.com">
          </div> 
          <div class="form-group">
          <label class="col-sm-4 control-label">Password</label>
          <div class="com-sm-10">
          <input type="password" class="form-control" name="password" placeholder="password">
          </div>
        </div>
        <div class="pt-4">
          <input type="submit" class="btn btn-primary m-3" name="submit" value="Ajouter">
        </div>

        </div>
        
       
        
        
      </form>
    </div>
  </div>
  @endsection