@extends('layouts.app')
@section('content')
{!! Form::open(['action' => 'ContactController@store','method' =>'POST']) !!}
<div class="container">
    @if($errors->all())
    <ul class="alert-danger">
        @foreach($errors->all() as $error)
        <li >
            {{$error}}
        </li>
        @endforeach
    </ul>
    @endif
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('Name')!!}
            {!! Form::text('name',null, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('Email')!!}
            {!! Form::text('email',null, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('Phone')!!}
            {!! Form::text('phone',null, ['class' => 'form-control'])!!}
        </div>
        <input type="submit" value="save" class="btn btn-primary" />
    </div>
</div>

{!! Form::close() !!}
@endsection