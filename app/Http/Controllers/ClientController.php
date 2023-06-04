<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use App\Models\Client;
use App\Models\Salle;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $clients=Client::get();
        return view('local.home',compact('clients'));
       
        // return $client->salle;
    }

    public function clientA(){
        $abonnements=Abonnement::where('payer',false)->get();
        $clients=$abonnements->client;
        dd($clients);
        // $clientA=$client->abonnements->where('payer','=','0');
        return view('local.clientA',compact('clientA'));
    }

    public function clientP(){
        $clientP=Client::where('payer','=','1');
        // $abonnement=$clientP->abonnements;
        return view('local.clientP',compact('clientP'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salles =Salle::all()->first();
        return view('local.addClient',compact('salles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client=Client::create([
        
            'client_id'=>$request->id,
            'cin'=>$request->cin,
            'nomClient'=>$request->nomClient,
            'prenomClient'=> $request->prenomClient,
            'ville'=>$request->ville,
            'tele'=>$request->tele,
            'salle_id'=>$request->salle_id

        ]);

         

        

            $type=$request->type;
            $dateD=$request->dateD;
            $payer=$request->payer;
            $carbonDate=\Carbon\Carbon::createFromFormat('Y-m-d',$dateD);
          
            if($type=='mensuelle'){
                $duree=1 ;
                $tarif=250;
            }elseif($type=='trimestrielle'){
                $duree=3 ;
                $tarif=700;
             
            }elseif($type=='annuelle') {
                $duree=12;
                $tarif=2000;  
            }  ;

            $dateF=$carbonDate->addMonth($duree);
         $abonnement = new Abonnement;
         $abonnement->type=$type;
         $abonnement->tarif=$tarif;
         $abonnement->duree=$duree;
         $abonnement->dateD=$dateD;
         $abonnement->dateF=$dateF;
         $abonnement->payer=$payer;
         $abonnement->client_id = $client->id;
         $abonnement->save();

         




      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
