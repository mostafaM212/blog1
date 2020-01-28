@extends('Layouts.app')
@section('Blogs Item')
    Blogs Item
@endsection
@section('containt')

    <h2 class="text-center primary">View</h2>
    <ul class="container text-center">
        {{csrf_field()}}
        <li class="list-group-item bg-danger">{{$blog->name}}</li>
        <li class="list-group-item bg-success">{{$blog->description}}</li>
        <li class="list-group-item bg-warning">{{$blog->created_at}}</li>
        <li class="list-group-item bg-primary">{{$blog->updated_at}}</li>
        <a class="btn btn-info" href="/blogs/{{$blog->id}}/edit">Edit</a>
        <a class="btn btn-danger" href="/blogs/{{$blog->id}}/delete">Delete</a>
    </ul>
@endsection
