@extends('layouts.app')
@section('content')

<main class="container-fluid">
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Admin Control Panel</h1>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
            <a href="{{ url('blog/create') }}"><button class="btn btn-primary">Create a post</button></a>
            <a href="{{ url('blog/bin') }}"><button class="btn btn-danger">Trashed post</button></a>
        </div>
    </div>
</main>
<hr>

@endsection