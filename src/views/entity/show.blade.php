
@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-end">
<a href="{{route('entities.edit',$entity->id)}}" class="btn btn-sm btn-warning">Modifier</a>
          <form onsubmit="confirm('Cette action irréversible ?')" action="{{route('entities.destroy',$entity->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf()
                                                        <button  type="submit" class="btn btn-danger btn-sm waves-effect">Supprimer</button>
                                                    </form>
</div>
<div class="card card-body">

    <dl>
        <dt>Nom</dt>
        <dd>{{$entity->name}}</dd>
    </dl>
    <dl>
        <dt>Sigle</dt>
        <dd>{{$entity->sigle}}</dd>
    </dl>
    <dl>
        <dt>Type Entité</dt>
        <dd>{{$entity->typeEntity->label}}</dd>
    </dl>


</div>



@endsection