@extends('layouts.master')

@section('content')
	
	 <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary">Main call to action</a>
          <a href="#" class="btn btn-secondary">Secondary action</a>
        </p>
      </div>
    </section>

    <div class="album text-muted">
      <div class="container">

        <div class="row">

        @foreach($posts as $post)

          <div class="card">
            <h3><a href='/post/{{$post->id}}'>{{$post->title}}</a></h3>
            <p><i>{{ $post->created_at->toFormattedDateString() }}</i></p>
            <p class="card-text">{{$post->body}}</p>
          </div>

          @endforeach

        </div>

      </div>
    </div>

@endsection


@section('footer')

<script>
	alert("OK");
</script>

@endsection