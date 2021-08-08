
@extends('layouts.master')

@section('content')

<form action="{{route('category-unities.store')}}" method="post">
@csrf()
<div class="form-group">
    <label for="">Libellé</label>
    <input type="text" class="form-control" name="label" required>
</div>


<button class="btn btn-sm btn-success" type="submit">Sauvegarder</button>

</form>


@endsection