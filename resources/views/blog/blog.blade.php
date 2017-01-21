@extends('partials.main')

@section('title')
  {{ $blog->titre }}

@endsection

@section('body')

<div class="col-md-6 col-md-offset-2">
    @if(Session::has('success'))
    <ul class="alert alert-success">
      <li>{{ Session::get('success')}}</li>
    </ul>
  @endif
  <div class="panel panel-default">
    <div class="panel-heading">
      {{ $blog->titre }}
    </div>
    <div class="panel-body">
      {{ $blog->body }}
      <div class="">
        <a href="{{ route('edit_blog',$blog->slug)}}" class="pull-right">Edit</a>
      </div>
      <div class="">
        <a href="#" class="pull-right" style="padding-right: 13px;">Delete</a>
      </div>
    </div>

  </div>
  </div>


@endsection
