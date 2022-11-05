@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                   
                   @foreach($post as $item)
                    <div class = "container">
                        <div class="row ">
                            <div class="col-12">
                                <h1 class="text-center">{{$item->title}}</h1>
                                <p >{{$item->description}}</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    @endforeach
 

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
