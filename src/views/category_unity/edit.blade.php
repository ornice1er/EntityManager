
@extends('layouts.master')

@section('content')

<form action="{{route('category-unities.update',$category_unity->id)}}" method="post">
@csrf()
@method('patch')
<div class="form-group">
    <label for="">Libellé</label>
    <input type="text" class="form-control" name="label" value="{{$category_unity->label}}" required>
</div>


<button class="btn btn-sm btn-success" type="submit">Sauvegarder</button>

</form>


@endsection