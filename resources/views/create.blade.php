@extends('layouts.layout')

@section('title')
    @parent :: {{$title}}
@endsection

@section('header')
    @parent
@endsection

@section('content')


    <div class="container">
        <form class="mt-5" method="post" action="{{route('posts.store')}}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{old('title')}}">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="10" value="{{old('content')}}"></textarea>
            </div>

            <div class="form-group">
                <label for="rubric_id">Rubric</label>
                <select class="form-control" id="rubric_id" name="rubric_id">
                    <option>Select Rubric</option>
                    @foreach($rubrics as $key=> $value)
                        <option value="{{$key}}"
                        @if(old('rubric_id')==$key) selected @endif
                        >{{$value}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Button submit</button>

        </form>
    </div>

@endsection
