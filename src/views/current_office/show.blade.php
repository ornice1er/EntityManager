
@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-end">
<a href="{{route('current-offices.edit',$current_office->id)}}" class="btn btn-sm btn-warning">Modifier</a>
          <form onsubmit="confirm('Cette action irréversible ?')" action="{{route('current-offices.destroy',$current_office->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf()
                                                        <button  type="submit" class="btn btn-danger btn-sm waves-effect">Supprimer</button>
                                                    </form>
</div>
<div class="card card-body">


    <dl>
        <dt>Agent</dt>
        <dd>{{$current_office->officer->lastname." ".$current_office->officer->firstname}}</dd>
    </dl>
    <dl>
        <dt>Unité</dt>
        <dd>{{$current_office->office->label}}</dd>
    </dl>


</div>



@endsection