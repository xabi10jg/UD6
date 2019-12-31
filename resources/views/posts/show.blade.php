  
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
        <h1 class="mt-4">{{$post->title}}</h1>
        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Post user</a>
        </p>
        <hr>
        <!-- Date/Time -->
        <p>Posted on {{$post->published_at}}</p>
        <hr>
        <!-- Preview Image -->
        @if($post->image)
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
        <hr>
        @endif
        <!-- Post Content -->
        <p class="lead">
       
        <blockquote class="blockquote">
          <p class="mb-0"></p>
            {{$post->body}}
        </blockquote>
     </div>
     </div>   

@endsection