@extends('layouts.master')
@section('title', 'view post')
@section('content')
<div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
<div class="jumbotron">
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p class="lead">
    <a class="btn btn-success " href="{{route('post.create')}}" role="button">CREATE</a>
  </p>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">actions</th>
      
    </tr>
  </thead>
  <tbody>
    @php 
    $x = 1 
    @endphp
@foreach($posts as $item)
    <tr>
      <th scope="row">{{$x++}}</th>
      <td>{{$item->title}}</td>
      <td><?php 
            $string = $item->description;
            $string = strip_tags($string);
if (strlen($string) > 200) {
    // truncate string
    $stringCut = substr($string, 0, 50);
    $endPoint = strrpos($stringCut, ' ');
    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    // $string .=  
}
echo $string; ?></td>
     
     <td>
<div class="container">
  <div class="row">
    <div class="col-sm">
        <a  class = "btn btn-warning" href="{{ route('post.edit', $item->id )}}">Edit</a>
    </div>
    <div class="col-sm">
    <a  class = "btn btn-info" href="{{route('post.show', $item->id)}}">Show</a>
    </div>
    <div class="col-sm">
    <form action="{{route('post.destroy', $item->id )}}" method="POST">
    @CSRF
    @method('DELETE')    
    <button type="submit" class = "btn btn-danger">Delete</button>
    </form>
    </div>
  </div>
</div></td>
    </tr>
    
    @endforeach
  </tbody>
</div>
</table> 
{{ $posts->links()}}
@endsection 