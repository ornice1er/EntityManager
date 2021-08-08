
@extends('layouts.master')

@section('content')

<form action="{{route('offices.update',$office->id)}}" method="post">
@csrf()
@method('patch')
<div class="form-group">
    <label for="">Libellé</label>
    <input type="text" class="form-control" name="label" value="{{$office->label}}" required>
</div>


<button class="btn btn-sm btn-success" type="submit">Sauvegarder</button>

</form>


@endsection