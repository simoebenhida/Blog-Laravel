@extends('partials.main')

@section('title')
  Inscription
@endsection

@section('body')

  <div class="col-md-4 col-md-offset-4">
    @if(count($errors) > 0)
      <div class="alert alert-danger">
          @foreach($errors->all() as $errors)
            <p>{{ $errors }}</p>
          @endforeach
      </div>
    @endif
    <form class="" action="{{ route('post_register')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Name :</label>
          <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
          <label for="name">Email :</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>
        <div class="form-group">
          <label for="password">Password :</label>
          <input type="password" name="password" class="form-control" value="">
        </div>
          <div class="form-group">
            <label for="password">Confirme Password : </label>
            <input type="password" name="password_confirmation" class="form-control" value="">
        </div>
      <button type="submit" name="button" class="btn-primary pull-right">Connection</button>
    </form>
  </div>

@endsection
