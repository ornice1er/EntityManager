<?php
namespace App\Http\Controllers;


use Usthenet\EntityManager\Models\CurrentOffice;
use Usthenet\EntityManager\Models\Officer;
use Usthenet\EntityManager\Models\Office;
use Illuminate\Http\Request;

class CurrentOfficeController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_offices=CurrentOffice::where('is_active',true)->get();
        return view('usthenet.entitymanager.current_office.index', compact('current_offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $officers=Officer::all();
        $offices=Office::all();

        return view('current_office.create',compact(['officers','offices']));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check=CurrentOffice::where('office',$request->office_id)->where('officer',$request->officer_id)->first();

        if ($check) {
            $check->update(['is_active'=>false]);
        }
        $datas=$request->all();
        $current_office=CurrentOffice::create($datas);
        return redirect()->route('current-offices.show',$current_office->id)->with('success',"Une ressource créée avec succès");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $current_office=CurrentOffice::find($id);
        return view('current_office.show',compact('current_office'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $officers=Officer::all();
        $offices=Office::all();
        $current_office=CurrentOffice::find($id);
        return view('current_office.edit',compact(['current_office','officers','offices']));
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
        $current_office=CurrentOffice::find($id)->update($datas);
        return redirect()->route('current-offices.show',$id)->with('success',"Une ressource modifiée avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $current_office=CurrentOffice::find($id);
       
        $current_office->delete();

        return redirect()->route('current-offices.index')->with('success',"Une ressource supprimée avec succès");
       
        if ($current_office->officers->count()==0) {
            $current_office->delete();

           return redirect()->route('current_offices.index')->with('success',"Une ressource supprimée avec succès");
        }else{
            return back()->with('success',"Impossible de supprimer cette ressource! élément parent");
        }
    }
}
