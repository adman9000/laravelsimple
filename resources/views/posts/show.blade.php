@extends('layouts.master')

@section('content')

            <h3><a href='/post/{{$post->id}}'>{{$post->title}}</a></h3>
            <p><i>{{ $post->created_at->toFormattedDateString() }}</i></p>
            <p class="card-text">{{$post->body}}</p>

@endsection