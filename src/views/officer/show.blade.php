
@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-end">
<a href="{{route('officers.edit',$officer->id)}}" class="btn btn-sm btn-warning">Modifier</a>
          <form onsubmit="confirm('Cette action irréversible ?')" action="{{route('officers.destroy',$officer->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf()
                                                        <button  type="submit" class="btn btn-danger btn-sm waves-effect">Supprimer</button>
                                                    </form>
</div>
<div class="card card-body">

    <dl>
        <dt>Matricule</dt>
        <dd>{{$officer->matricule}}</dd>
    </dl>
    <dl>
        <dt>Nom</dt>
        <dd>{{$officer->lastname}}</dd>
    </dl>
    <dl>
        <dt>Prénoms</dt>
        <dd>{{$officer->firstname}}</dd>
    </dl>
    <dl>
        <dt>Date de naissance</dt>
        <dd>{{$officer->birthday}}</dd>
    </dl>
    <dl>
        <dt>Adresse</dt>
        <dd>{{$officer->address}}</dd>
    </dl>
    <dl>
        <dt>Email</dt>
        <dd>{{$officer->email}}</dd>
    </dl>
    <dl>
        <dt>Contact</dt>
        <dd>{{$officer->phone}}</dd>
    </dl>
    <dl>
        <dt>Unité</dt>
        <dd>{{$officer->unity->name}}</dd>
    </dl>


</div>



@endsection