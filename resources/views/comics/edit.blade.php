@extends('layouts.app');

@section('content')
<section class="py-5">
    <div class="container">
      <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST" >

        @csrf

        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Titolo" value="{{$comic->title}}">
        </div>
  
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="Comicbook description">{{$comic->description}}</textarea>
        </div>
  
        <div class="mb-3">
          <label for="thumb" class="form-label">Image (url)</label>
          <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Url image" value="{{$comic->thumb}}">
        </div>
  
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" class="form-control" name="price" id="price" placeholder="Item price ($)" value="{{$comic->price}}">
        </div>
  
        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale Date</label>
          <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Sale Date (YYYY/mm/dd)" value="{{$comic->sale_date}}">
        </div>
  
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" class="form-control" name="series" id="series" placeholder="Series" value="{{$comic->series}}">
        </div>
  
        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="{{$comic->type}}">
        </div>
  
        <div class="mb-3">
          <label for="artists" class="form-label">Artists</label>
          <textarea class="form-control" name="artists" id="artists" rows="3" placeholder="Artists">{{$comic->artists}}</textarea>
        </div>
  
        <div class="mb-3">
          <label for="writers" class="form-label">Writers</label>
          <textarea class="form-control" name="writers" id="writers" rows="3" placeholder="Writers">{{$comic->writers}}</textarea>
        </div>
  
        <div class="">
          <input type="submit" class="btn btn-primary" value="create">
        </div>
      </form>
    </div>
  </section>
@endsection