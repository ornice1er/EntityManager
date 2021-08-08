<?php

namespace App\Http\Controllers;

use Usthenet\EntityManager\Models\TypeUnity;
use Illuminate\Http\Request;

class TypeUnityController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_unities=TypeUnity::all();
        return view('type_unity.index', compact('type_unities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type_unity.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $type_unity=TypeUnity::create($request->all());
        return redirect()->route('type-unities.show',$type_unity->id)->with('success',"Une ressource créée avec succès");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $type_unity=TypeUnity::find($id);
        return view('type_unity.show',compact('type_unity'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type_unity=TypeUnity::find($id);
        return view('type_unity.edit',compact('type_unity'));
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
        TypeUnity::find($id)->update($request->all());
        return redirect()->route('type-unities.show',$id)->with('success',"Une ressource modifiée avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      

        if ($type_unity->unities->count()==0) {
            $type_unity->delete();
           return redirect()->route('type-unities.index')->with('success',"Une ressource supprimée avec succès");

        }else{
            return back()->with('success',"Impossible de supprimer cette ressource! élément parent");
        }
    }
}
