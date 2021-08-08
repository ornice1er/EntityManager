
@extends('layouts.master')

@section('content')

<form action="{{route('unities.store')}}" method="post">
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
    <label for="">Entité</label>
    <select name="entity_id" id="" class="form-control">
        @foreach($entities as $entity)
        <option value="{{$entity->id}}">{{$entity->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Type Unité</label>
    <select name="type_unity_id" id="" class="form-control">
        @foreach($type_unities as $type_unity)
        <option value="{{$type_unity->id}}">{{$type_unity->label}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Catégorie Unité</label>
    <select name="category_unity_id" id="" class="form-control">
        @foreach($category_unities as $cu)
        <option value="{{$cu->id}}">{{$cu->label}}</option>
        @endforeach
    </select>
</div>


<button class="btn btn-sm btn-success" type="submit">Sauvegarder</button>

</form>


@endsection