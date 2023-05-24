@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row row-cols-3 g-4">
        @foreach ($movies as $movie)
        <div class="col">
            <div class="card" style="width: 20rem;">
                <img src="{{ $movie->image}}" alt="">
                <div class="card-body">
                    <div class="title">{{ $movie->title}}</div>
                </div>
            </div>
          
        </div>
            
        @endforeach

    </div>
</div>
    
@endsection