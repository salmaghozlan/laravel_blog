@extends('layouts.master')
@section('title', 'Add post')
@section('content')
<div class="container-fluid ">
<h1 class="mt-4">Dashboard</h1>
<div class="card" >
  
  <div class="card-body ">
    <h5 class="card-title text-center">edit post </h5>
    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary " href="{{route('post.index')}}" role="button">posts</a>
  </div>
</div>
<form action="{{route('post.update', $post->id)}}" method="POST">
  @CSRF
@method('PUT')
  <div class="form-group mt-5/">
    <label for="exampleInputtitle1">title</label>
    <input type="text" class="form-control" id="exampleInputtitle1" name="title"  value= "{{$post->title}}"placeholder="Enter title">

  </div>
  <div class="form-group">
    <label for="exampleInputdescription1">description</label>
    <textarea name="description" id=""  cols="90" rows="10">{{$post->description}}</textarea>
  
  </div>
  
  <button type="submit" class="btn btn-warning">edit</button>
</form>
</div>
@endsection 