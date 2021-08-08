
@extends('layouts.master')

@section('content')

<form action="{{route('unities.update',$unity->id)}}" method="post">
@csrf()
@method('patch')

<div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" name="name" value="{{$unity->name}}" required>
</div>
<div class="form-group">
    <label for="">Sigle</label>
    <input type="text" class="form-control" name="sigle" value="{{$unity->sigle}}" required>
</div>
<div class="form-group">
    <label for="">Type unité</label>
    <select name="type_unity_id" id="" class="form-control">
        @foreach($type_unities as $type_unity)
        <option value="{{$type_unity->id}}" @if($type_unity->id ==$unity->typeUnity->id ) selected  @endif >{{$type_unity->label}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Entité</label>
    <select name="entity_id" id="" class="form-control">
        @foreach($entities as $entity)
        <option value="{{$entity->id}}" @if($entity->id ==$unity->entity->id ) selected  @endif>{{$entity->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Catégorie Unité</label>
    <select name="category_unity_id" id="" class="form-control">
        @foreach($category_unities as $cu)
        <option value="{{$cu->id}}"  @if($cu->id == $unity->categoryUnity->id ) selected  @endif>{{$cu->label}}</option>
        @endforeach
    </select>
</div>

<button class="btn btn-sm btn-success" type="submit">Sauvegarder</button>

</form>


@endsection