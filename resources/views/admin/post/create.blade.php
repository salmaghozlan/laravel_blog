@extends('layouts.master')
@section('title', 'Add post')
@section('content')
<div class="container-fluid ">

<h3 class="mx-5 mt-5">CREATE POST </h3>
  
 
   
   
  
    <div class="card mt-4 py-4 px-4 mx-5">
<form action="{{route('post.store')}}" method="POST">
  @CSRF

  <div class="form-group mt-2 mx-5">
    <label for="exampleInputtitle1">title</label>
    <input type="text" class="form-control" id="exampleInputtitle1" name="title" placeholder="Enter title">

  </div>
  
  <div class="form-group mx-5">
    <label for="exampleInputdescription1">description</label>
    <textarea name="description" id="" cols="50" rows="5"></textarea>
  
  </div>
  
  <button type="submit" class="btn btn-dark mx-5">Save</button>
</form>


</div>
<a class="btn btn-light mt-5 mx-5" href="{{route('post.index')}}" role="button">POSTS</a>
</div>
@endsection 