<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use App\Models\Salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsables=Responsable::all();
        return view('local.listerResponsable',compact('responsables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salles =Salle::all()->first();
        return view('local.addResponsable',compact('salles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'password'=>'required|min:5|max:20',
            'email'=>'required|unique:responsables',
            'teleRespo'=>'min:10|max:10',
        ]);
        
        $password=Hash::make($request->password);
        

        Responsable::create([
            'cinRespo'=>$request->cinRespo,
            'nomRespo'=>$request->nomRespo,
            'prenomRespo'=>$request->prenomRespo,
            'teleRespo'=>$request->teleRespo,
            'salle_id'=>$request->salle_id,
            'email'=>$request->email,
            'password'=>$password,

            redirect()->route('listerResponsable')
            


        ]);
       
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
