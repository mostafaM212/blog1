@extends('Layouts.app')
@section('Blogs')
    Blogs
@endsection
@section('containt')
    <h1 class="text-center" >Bolgs List</h1>
    <ul class="container text-center ">
        @foreach($blogs as $blog)
            <div class="list-group-item bg-danger  ">
                <li class="">{{$blog->name}}
                    {{csrf_field()}}
                    {{--                    <li>{{$blog->description}}</li>--}}
                    {{--                    <li>{{$blog->created_at}}</li>--}}
                    @if(!$blog->completed)
                        <a class="btn btn-warning btn-sm float-right " style="margin:5px" href="blogs/{{$blog->id}}/complete" >Complete</a>
                     @endif
                    <a class="btn btn-primary btn-sm float-right " href="blogs/{{$blog->id}}" >View</a>

                </li>
            </div>
        @endforeach
    </ul>
@endsection
