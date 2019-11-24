@extends('layouts.front')

@section('banner')
    <div class="jumbotron">
        <div class="container h-100">
            <h1 >University of Jaffna</h1>
            <h2>Faculty of Science</h2>
            <h3>Department of Computer Science</h3>
            <p>Help and get help</p>
            <p>
                <a class="btn btn-primary btn-lg" a href = "https://drive.google.com/drive/folders/1nb4F6WmVHXw6VqhihB8ae_X6kHdC-MBI">Get Files and Papers</a>
            </p>
        </div>
    </div>
@endsection
@section('heading',"Threads")
@section('content')
    @include('thread.partials.thread-list')
@endsection