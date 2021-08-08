<?php

namespace App\Http\Controllers;

use Usthenet\EntityManager\Models\Officer;
use Usthenet\EntityManager\Models\Unity;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officers=Officer::all();
        return view('officer.index', compact('officers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unities=Unity::all();

        return view('officer.create',compact('unities'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas=$request->all();
        $datas['birthday']=date_create($request->birthday);
        $officer=Officer::create($datas);
        return redirect()->route('officers.show',$officer->id)->with('success',"Une ressource créée avec succès");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $officer=Officer::find($id);
        return view('officer.show',compact('officer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $officer=Officer::find($id);
        $unities=Unity::all();
        return view('officer.edit',compact(['officer','unities']));
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
        $datas=$request->all();
        $datas['birthday']=date_create($request->birthday);
        $officer=Officer::find($id)->update($datas);
        return redirect()->route('officers.show',$id)->with('success',"Une ressource modifiée avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $officer=Officer::find($id);
        $officer->delete();

        return redirect()->route('officers.index')->with('success',"Une ressource supprimée avec succès");
        if ($officer->unities->count()==0) {
            $officer->delete();

           return redirect()->route('officers.index')->with('success',"Une ressource supprimée avec succès");
        }else{
            return back()->with('success',"Impossible de supprimer cette ressource! élément parent");
        }
    }
}
