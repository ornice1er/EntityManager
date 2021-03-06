<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Usthenet\EntityManager\Models\Entity;

class EntityController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entities=Entity::all();
        return view('entity.index', compact('entities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_entities=TypeEntity::all();

        return view('entity.create',compact('type_entities'));

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
        $datas['slug']=Str::slug($request->name);
        $entity=Entity::create($datas);
        return redirect()->route('entities.show',$entity->id)->with('success',"Une ressource créée avec succès");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $entity=Entity::find($id);
        return view('entity.show',compact('entity'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entity=Entity::find($id);
        $type_entities=TypeEntity::all();
        return view('entity.edit',compact(['entity','type_entities']));
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
        $datas['slug']=Str::slug($request->name);
        $entity=Entity::find($id)->update($datas);
        return redirect()->route('entities.show',$id)->with('success',"Une ressource modifiée avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entity=Entity::find($id);
        
        if ($entity->unities->count()==0) {
            $entity->delete();

           return redirect()->route('entities.index')->with('success',"Une ressource supprimée avec succès");
        }else{
            return back()->with('success',"Impossible de supprimer cette ressource! élément parent");
        }
    }
}
