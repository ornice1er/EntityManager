
@extends('layouts.master')

 @section('content')
<a href="{{route('current-offices.create')}}" class="btn btn-primary float-right mr-2">Ajouter</a>                                                    
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom Agent</th>
      <th scope="col">Fonction</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody
  @foreach($current_offices as $current_office)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$current_office->officer->lastname." ".$current_office->officer->firstname}}</td>
      <td>{{$current_office->office->label}}</td>
      <td class="d-flex justify-content-end">
          <a href="{{route('current-offices.show',$current_office->id)}}" class="btn btn-sm btn-info">Consulter</a>
          <a href="{{route('current-offices.edit',$current_office->id)}}" class="btn btn-sm btn-warning">Modifier</a>
          <form onsubmit="confirm('Cette action irréversible ?')" action="{{route('current-offices.destroy',$current_office->id)}}" method="POST">
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