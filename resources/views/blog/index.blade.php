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
    <div class="panel panel-default">
      <div class="panel-heading">
        Titre du Blog
      </div>
      <div class="panel-body">
        Blog content
          <a href="#"><p class="pull-right">lire la suite ...</p></a>
      </div>

    </div>
  </div>

@endsection
