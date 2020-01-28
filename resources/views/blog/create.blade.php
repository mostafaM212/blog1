@extends('Layouts.app')
@section('New Blog')
    New Blog
@endsection

@section('containt')
    <h1 class="text-danger text-center"> Create Blog</h1>
    <div class="row-justify-content-center">
        <div class="col-md-g">
            <div class="card-card-default text-center">
                <div class="card-header">create blog</div>
                <div class="card-body ">

                    @if($errors->any())
                        <div class="danger danger-alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/store-blogs" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-content" name="name" placeholder="Name">
                        </div>

                        <textarea name="description" placeholder="Description" cols="1" rows="5" class="form-control"></textarea>
                        <button type="submit" class="btn btn-success">create Blog</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
