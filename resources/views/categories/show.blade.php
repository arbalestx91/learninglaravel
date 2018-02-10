@extends('layouts.app')
@section('content')

<main class="container-fluid">
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>{{ $category->name }}</h1>
        </div>
        <h2 class="text-center"><strong>Recent Blogs on {{ $category->name }}</strong></h2>
        @foreach ($category->blog as $blog)
            <h2><a href="">{{ $blog->title }}</a></h2>
        @endforeach
    </div>
</main>
<hr>

@endsection