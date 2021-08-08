<?php

namespace App\Http\Controllers;
use Usthenet\EntityManager\Models\CategoryUnity;
use Illuminate\Http\Request;

class CategoryUnityController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_unities=CategoryUnity::all();
        return view('category_unity.index', compact('category_unities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category_unity.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $category_unity=CategoryUnity::create($request->all());
        return redirect()->route('category-unities.show',$category_unity->id)->with('success',"Une ressource créée avec succès");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $category_unity=CategoryUnity::find($id);
        return view('category_unity.show',compact('category_unity'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category_unity=CategoryUnity::find($id);
        return view('category_unity.edit',compact('category_unity'));
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
        CategoryUnity::find($id)->update($request->all());
        return redirect()->route('category-unities.show',$id)->with('success',"Une ressource modifiée avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category_unity=CategoryUnity::find($id);
        if ($category_unity->unities->count()==0) {
            $category_unity->delete();

           return redirect()->route('category-unities.index')->with('success',"Une ressource supprimée avec succès");
        }else{
            return back()->with('success',"Impossible de supprimer cette ressource! élément parent");
        }
    }
}
