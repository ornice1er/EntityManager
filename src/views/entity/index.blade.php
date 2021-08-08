
@extends('layouts.master')

 @section('content')
<a href="{{route('entities.create')}}" class="btn btn-primary float-right mr-2">Ajouter</a>                                                    
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Sigle</th>
      <th scope="col">Type Entité</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody
  @foreach($entities as $entity)
  {{$entity->typeEntity}}
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$entity->name}}</td>
      <td>{{$entity->sigle}}</td>
      <td>{{$entity->typeEntity->label}}</td>
      <td class="d-flex justify-content-end">
          <a href="{{route('entities.show',$entity->id)}}" class="btn btn-sm btn-info">Consulter</a>
          <a href="{{route('entities.edit',$entity->id)}}" class="btn btn-sm btn-warning">Modifier</a>
          <form onsubmit="confirm('Cette action irréversible ?')" action="{{route('entities.destroy',$entity->id)}}" method="POST">
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