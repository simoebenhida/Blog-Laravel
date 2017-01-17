@extends('partials.main')

@section('title')
  Home
@endsection

@section('body')
@if(Auth::check())
    <p>{{ Auth::user()->name }}</p>
@else
  <p>not connected</p>
@endif
@endsection
