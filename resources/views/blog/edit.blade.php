@extends('partials.main')
@section('title')
  Edit Blog
@endsection

@section('body')
    <div class="col-md-4 col-md-offset-4">
      <form class="" action="{{ route('blog.update',$blog->id)}}" method="post">
        {{ csrf_field() }}
        @if(count($errors) > 0)
          <div class="alert alert-danger">
              @foreach($errors->all() as $errors)
                <p>{{ $errors }}</p>
              @endforeach
          </div>
        @endif
        <div class="form-group">
          <label for="titre">Titre : </label>
          <input type="text" name="titre" class="form-control" value="{{ $blog->titre }}">
        </div>
        <div class="form-group">
          <label for="slug">Slug : </label>
          <input type="text" name="slug" class="form-control" value="{{ $blog->slug }}">
        </div>
        <div class="form-group">
          <label for="body">Body : </label>
          <textarea name="body" rows="8" cols="80">{{ $blog->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-success" name="button">Enregistrer</button>
      </form>
  </div>

@endsection
