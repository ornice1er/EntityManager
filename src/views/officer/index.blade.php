
@extends('layouts.master')

 @section('content')
<a href="{{route('officers.create')}}" class="btn btn-primary float-right mr-2">Ajouter</a>                                                    
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom et prénoms</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Unité</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody
  @foreach($officers as $officer)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$officer->firstname." ".$officer->lastname}}</td>
      <td>{{$officer->birthday}}</td>
      <td>{{$officer->phone}}</td>
      <td>{{$officer->unity->name}}</td>
      <td class="d-flex justify-content-end">
          <a href="{{route('officers.show',$officer->id)}}" class="btn btn-sm btn-info">Consulter</a>
          <a href="{{route('officers.edit',$officer->id)}}" class="btn btn-sm btn-warning">Modifier</a>
          <form onsubmit="confirm('Cette action irréversible ?')" action="{{route('officers.destroy',$officer->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf()
                                                        <button  type="submit" class="btn btn-danger btn-sm waves-effect">Supprimer</button>
                                                    </form>
      </td>
    </tr>

    @endforeach
   
  </tbody>
</table>

@endsection