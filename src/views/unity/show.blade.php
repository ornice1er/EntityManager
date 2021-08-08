
@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-end">
<a href="{{route('unities.edit',$unity->id)}}" class="btn btn-sm btn-warning">Modifier</a>
          <form onsubmit="confirm('Cette action irréversible ?')" action="{{route('unities.destroy',$unity->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf()
                                                        <button  type="submit" class="btn btn-danger btn-sm waves-effect">Supprimer</button>
                                                    </form>
</div>
<div class="card card-body">

    <dl>
        <dt>Nom</dt>
        <dd>{{$unity->name}}</dd>
    </dl>
    <dl>
        <dt>Sigle</dt>
        <dd>{{$unity->sigle}}</dd>
    </dl>
    <dl>
        <dt>Entité</dt>
        <dd>{{$unity->entity->name}}</dd>
    </dl>
    <dl>
        <dt>Type Unité</dt>
        <dd>{{$unity->typeUnity->label}}</dd>
    </dl>
    <dl>
        <dt>Catégorie unité</dt>
        <dd>{{$unity->categoryUnity->label}}</dd>
    </dl>


</div>



@endsection