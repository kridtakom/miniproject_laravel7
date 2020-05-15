@extends('layouts.app')
@section('content')
{!! Form::open(['action' => ['ContactController@update',$data->id],'method' =>'PUT']) !!}
<div class="container">
    @if($errors->all())
    <ul class="alert-danger">
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
    @endif
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('Name')!!}
            {!! Form::text('name',$data->name, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('Email')!!}
            {!! Form::text('email',$data->email, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('Phone')!!}
            {!! Form::text('phone',$data->phone, ['class' => 'form-control'])!!}
        </div>
        <input type="submit" value="Update" class="btn btn-success" />
        <a href="/contact" class="btn btn-danger">Back</a>
    </div>
</div>

{!! Form::close() !!}
@endsection