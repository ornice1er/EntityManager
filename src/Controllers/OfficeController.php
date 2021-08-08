<?php
namespace App\Http\Controllers;

use Usthenet\EntityManager\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offices=Office::all();
        return view('office.index', compact('offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('office.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $office=Office::create($request->all());
        return redirect()->route('offices.show',$office->id)->with('success',"Une ressource créée avec succès");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $office=Office::find($id);
        return view('office.show',compact('office'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $office=Office::find($id);
        return view('office.edit',compact('office'));
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
        Office::find($id)->update($request->all());
        return redirect()->route('offices.show',$id)->with('success',"Une ressource modifiée avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $office=Office::find($id);
        
        if ($office->currentOffice->count()==0) {
            $office->delete();

           return redirect()->route('offices.index')->with('success',"Une ressource supprimée avec succès");
        }else{
            return back()->with('success',"Impossible de supprimer cette ressource! élément parent");
        }
    }
}
