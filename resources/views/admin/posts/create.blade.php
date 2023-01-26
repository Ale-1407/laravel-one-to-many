@extends('layouts.app')
@section('content')
   <div>
     <h1>Crea un post</h1>
   </div>

   <form action="{{route('admin.posts.store')}}" method="POST">
    @csrf
    <div class="my-3">
         <label class="form-label" for="">Titolo</label>
         <input class="form-control" type="text" name="title">
    </div>
    @error('title')
      <div class="alert alert-danger">
        {{ $message }}
      </div>
    @enderror

    <div class="my-3">
        <label class="form-label" for="">Body</label>
        <textarea class="form-control" type="text" name="body"></textarea>
   </div>
    @error('body')
      <div class="alert alert-danger">
        {{ $message }}
      </div>
    @enderror

   <button type="submit" class="btn btn-primary">Crea</button>
   </form>
@endsection
