@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <form action="{{ route('comics.store') }}" method="POST" >
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titolo">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Comicbook description"></textarea>
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Image (url)</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Url image">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" name="price" id="price" placeholder="Item price ($)">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Sale Date (YYYY/mm/dd)">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <textarea class="form-control" name="type" id="type" rows="3" placeholder="Descrivi la pasta"></textarea>
      </div>

      <div class="">
        <input type="submit" class="btn btn-primary" value="create">
      </div>

    </form>
  </div>
</section>

@endsection