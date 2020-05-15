@extends('layouts.app')
@section('content')
<div class="container">
    <h2 align="center" style="font-weight:bold;"> Customer Contact</h2>
    <a href="/contact/create" class="btn btn-success my-2 float-right">Add contact</a>
    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">User ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->phone}}</td>
                <td> <a href="{{route('contact.edit',$row->id)}}" class="btn btn-warning">Edit Data</a></td>
                <td>
                    <form action="{{route('contact.destroy',$row->id)}}" method="post">
                        @csrf @method('DELETE')
                    <input type="submit" value="Delete" data-name="{{$row->name}}"class="btn btn-danger deleteForm" >
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection