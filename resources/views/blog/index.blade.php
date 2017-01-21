@extends('partials.main')
@section('title')
  Blog
@endsection

@section('body')
    <div class="col-md-4 col-md-offset-4">
      @if(Session::has('success'))
      <ul class="alert alert-success">
        <li>{{ Session::get('success')}}</li>
      </ul>
    @endif
    @foreach($blogs as $blog)
    <div class="panel panel-default">
      <div class="panel-heading">
        {{ $blog->titre }}
      </div>
      <div class="panel-body">
        {{ $blog->body }}
          <a href="{{ route('single_blog',$blog->slug)}}"><p class="pull-right">lire la suite ...</p></a>
      </div>

    </div>
  @endforeach
  </div>

@endsection
