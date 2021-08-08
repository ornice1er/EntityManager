
@extends('layouts.master')

 @section('content')
<a href="{{route('unities.create')}}" class="btn btn-primary float-right mr-2">Ajouter</a>                                                    
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Sigle</th>
      <th scope="col">Type Entité</th>
      <th scope="col">Type Unité</th>
      <th scope="col">Catégorie Unité</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody
  @foreach($unities as $unity)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$unity->name}}</td>
      <td>{{$unity->sigle}}</td>
      <td>{{$unity->entity->name}}</td>
      <td>{{$unity->typeUnity->label}}</td>
      <td>{{$unity->categoryUnity->label}}</td>
      <td class="d-flex justify-content-end">
          <a href="{{route('unities.show',$unity->id)}}" class="btn btn-sm btn-info">Consulter</a>
          <a href="{{route('unities.edit',$unity->id)}}" class="btn btn-sm btn-warning">Modifier</a>
          <form onsubmit="confirm('Cette action irréversible ?')" action="{{route('unities.destroy',$unity->id)}}" method="POST">
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