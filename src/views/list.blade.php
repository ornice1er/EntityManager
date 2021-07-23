@extends('Usthenet.entitymanager.app')
@section('content')
    @if(isset($entity))
        <h3>Edit : </h3>
        {!! Form::model($entity, ['route' => ['entity.update', $entity->id], 'method' => 'patch']) !!}
    @else
        <h3>Add New entity : </h3>
        {!! Form::open(['route' => 'entity.store']) !!}
    @endif
        <div class="form-inline">
            <div class="form-group">
                {!! Form::text('name',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit($submit, ['class' => 'btn btn-primary form-control']) !!}
            </div>
        </div>
    {!! Form::close() !!}
    <hr>
    <h4>entitys To Do : </h4>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entitys as $entity)
                <tr>
                    <td>{{ $entity->name }}</td>
                    <td>
                        {!! Form::open(['route' => ['entity.destroy', $entity->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{!! route('entity.edit', [$entity->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection