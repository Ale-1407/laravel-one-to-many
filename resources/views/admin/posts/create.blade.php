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

    {{-- Category --}}
    <div class="my-3">
        <label for="">Categories</label>
        <select class="form-control" name="category_id" id="">
            <option value="">Seleziona la categoria</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">
              {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>

   <button type="submit" class="btn btn-primary">Crea</button>
   </form>
@endsection
