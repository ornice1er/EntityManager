
@extends('layouts.master')

@section('content')

<form action="{{route('officers.update',$officer->id)}}" method="post">
@csrf()
@method('patch')

<div class="form-group">
    <label for="">matricule</label>
    <input type="text" class="form-control" name="matricule" value="{{$officer->matricule}}" required>
</div>
<div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" name="lastname" value="{{$officer->lastname}}" required>
</div>
<div class="form-group">
    <label for="">Prénoms</label>
    <input type="text" class="form-control" name="firstname" value="{{$officer->firstname}}" required>
</div>
<div class="form-group">
    <label for="">Date</label>
    <input type="date" class="form-control" name="birthday" value="{{$officer->birthday}}"  required>
</div>
<div class="form-group">
    <label for="">Adresse</label>
    <input type="text" class="form-control" name="address" value="{{$officer->address}}" required>
</div>
<div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email"  value="{{$officer->email}}" required>
</div>
<div class="form-group">
    <label for="">Téléphone</label>
    <input type="phone" class="form-control" name="phone"  value="{{$officer->phone}}" required>
</div>
<div class="form-group">
    <label for="">Unité</label>
    <select name="unity_id" id="" class="form-control">
        @foreach($unities as $unity)
        <option value="{{$unity->id}}" @if($unity->id ==$officer->unity->id ) selected  @endif >{{$unity->name}}</option>
        @endforeach
    </select>
</div>


<button class="btn btn-sm btn-success" type="submit">Sauvegarder</button>

</form>


@endsection