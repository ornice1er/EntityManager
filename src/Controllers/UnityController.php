<?php
namespace App\Http\Controllers;

use Usthenet\EntityManager\Models\Unity;
use Usthenet\EntityManager\Models\TypeUnity;
use Usthenet\EntityManager\Models\Entity;
use Usthenet\EntityManager\Models\CategoryUnity;
use Illuminate\Http\Request;
use Str;

class UnityController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unities=Unity::all();
        return view('unity.index', compact('unities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_unities=TypeUnity::all();
        $entities=Entity::all();
        $category_unities=CategoryUnity::all();

        return view('unity.create',compact(['type_unities','entities','category_unities']));

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
        $unity=Unity::create($datas);
        return redirect()->route('unities.show',$unity->id)->with('success',"Une ressource créée avec succès");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $unity=Unity::find($id);
        return view('unity.show',compact('unity'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type_unities=TypeUnity::all();
        $entities=Entity::all();
        $category_unities=CategoryUnity::all();
        $unity=Unity::find($id);
        return view('unity.edit',compact(['unity','type_unities','entities','category_unities']));
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
        $unity=Unity::find($id)->update($datas);
        return redirect()->route('unities.show',$id)->with('success',"Une ressource modifiée avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unity=Unity::find($id);
       

       
        if ($unity->officers->count()==0) {
            $unity->delete();

           return redirect()->route('unities.index')->with('success',"Une ressource supprimée avec succès");
        }else{
            return back()->with('success',"Impossible de supprimer cette ressource! élément parent");
        }
    }
}
