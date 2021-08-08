
@extends('layouts.master')

@section('content')

<form action="{{route('entities.store')}}" method="post">
@csrf()

<div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" name="name" required>
</div>
<div class="form-group">
    <label for="">Sigle</label>
    <input type="text" class="form-control" name="sigle"  required>
</div>
<div class="form-group">
    <label for="">Type entité</label>
    <select name="type_entity_id" id="" class="form-control">
        @foreach($type_entities as $type_entity)
        <option value="{{$type_entity->id}}">{{$type_entity->label}}</option>
        @endforeach
    </select>
</div>


<button class="btn btn-sm btn-success" type="submit">Sauvegarder</button>

</form>


@endsection