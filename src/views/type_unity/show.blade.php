
@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-end">
<a href="{{route('type-unities.edit',$type_unity->id)}}" class="btn btn-sm btn-warning">Modifier</a>
          <form onsubmit="confirm('Cette action irréversible ?')" action="{{route('type-unities.destroy',$type_unity->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf()
                                                        <button  type="submit" class="btn btn-danger btn-sm waves-effect">Supprimer</button>
                                                    </form>
</div>
<div class="card card-body">

    <dl>
        <dt>Libellé</dt>
        <dd>{{$type_unity->label}}</dd>
    </dl>

</div>



@endsection