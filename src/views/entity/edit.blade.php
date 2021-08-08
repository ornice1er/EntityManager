
@extends('layouts.master')

@section('content')

<form action="{{route('entities.update',$entity->id)}}" method="post">
@csrf()
@method('patch')

<div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" name="name" value="{{$entity->name}}" required>
</div>
<div class="form-group">
    <label for="">Sigle</label>
    <input type="text" class="form-control" name="sigle" value="{{$entity->sigle}}" required>
</div>
<div class="form-group">
    <label for="">Type entité</label>
    <select name="type_entity_id" id="" class="form-control">
        @foreach($type_entities as $type_entity)
        <option value="{{$type_entity->id}}" @if($type_entity->id ==$entity->typeEntity->id ) selected  @endif >{{$type_entity->label}}</option>
        @endforeach
    </select>
</div>


<button class="btn btn-sm btn-success" type="submit">Sauvegarder</button>

</form>


@endsection