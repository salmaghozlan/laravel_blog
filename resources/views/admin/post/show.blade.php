@extends('layouts.master')
@section('title', 'Add post')
@section('content')
<div class="container-fluid ">

<div class="mt-5 mx-5" >
  
  <div class="">
    <h3 class="">{{$post->title}}  </h3>
    <p class="">{{$post->description}}</p>
    <a class="btn btn-dark " href="{{route('post.index')}}" role="button">POSTS</a>
  </div>
</div>
</div>
@endsection 