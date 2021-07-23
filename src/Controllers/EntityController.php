<?php

namespace Usthenet\EntityManager\Controllers;
use App\Http\Controllers\Controller;
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
        return redirect()->route('entity.create');
    }


    public function create()
    {
        $entitys = Entity::all();
        $submit = 'Add';
        return view('usthenet.entitymanager.list', compact('entitys', 'submit'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Request::all();
        Entity::create($input);
        return redirect()->route('entity.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }


    public function edit( $id)
    {
        $entitys = Entity::all();
        $entity = $entitys->find($id);
        $submit = 'Update';
        return view('usthenet.entitymanager.list', compact('entitys', 'entity', 'submit'));
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
        
        $input = Request::all();
        $entity = Entity::findOrFail($id);
        $entity->update($input);
        return redirect()->route('entity.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entity = Entity::findOrFail($id);
        $entity->delete();
        return redirect()->route('entity.create');
    }
}
