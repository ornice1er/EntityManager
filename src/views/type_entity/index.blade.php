
@extends('layouts.master')

 @section('content')
<a href="{{route('type-entities.create')}}" class="btn btn-primary float-right mr-2">Ajouter</a>                                                    
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libellé</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody
  @foreach($type_entities as $type_entity)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$type_entity->label}}</td>
      <td class="d-flex justify-content-end">
          <a href="{{route('type-entities.show',$type_entity->id)}}" class="btn btn-sm btn-info">Consulter</a>
          <a href="{{route('type-entities.edit',$type_entity->id)}}" class="btn btn-sm btn-warning">Modifier</a>
          <form onsubmit="confirm('Cette action irréversible ?')" action="{{route('type-entities.destroy',$type_entity->id)}}" method="POST">
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