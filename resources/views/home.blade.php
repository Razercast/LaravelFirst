@extends('layouts.layout')

@section('title')
    @parent :: {{$title}}
@endsection

@section('header')
    @parent
@endsection

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <div></div>
        @if(count($data1) > 20)
            Count > 20
        @elseif(count($data1) < 20)
            Count < 20
        @else
            Count = 20;
        @endif

    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card_title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->content}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">{{$post->getPostDate()}}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
