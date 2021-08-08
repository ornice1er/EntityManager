
@extends('layouts.master')

@section('content')

<form action="{{route('current-offices.store')}}" method="post">
@csrf()
<div class="form-group">
    <label for="">Agent</label>
    <select name="officer_id" id="" class="form-control">
        @foreach($officers as $officer)
        <option value="{{$officer->id}}">{{$officer->lastname." ".$officer->firstname}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <label for="">Fonction</label>
    <select name="office_id" id="" class="form-control">
        @foreach($offices as $office)
        <option value="{{$office->id}}">{{$office->label}}</option>
        @endforeach
    </select>
</div>


<button class="btn btn-sm btn-success" type="submit">Sauvegarder</button>

</form>


@endsection