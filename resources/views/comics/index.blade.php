@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>TITLE</th>
          <th>IMAGE</th>
          <th>PRICE</th>
          <th>SERIES</th>
          <th>SALE DATE</th>
          <th>TYPE</th>
          <th>
            <a href="{{ route('comics.create') }}" class="btn btn-sm btn-primary">NEW COMIC</a>
          </th>
        </tr>
      </thead>
      <tbody>
        @forelse ($comics as $comic)
            <tr>
              <td>{{ $comic->id }}</td>
              <td><a href="{{route('comics.show',$comic)}}">{{ $comic->title }}</a></td>
              <td><img style="width: 80px" src="{{ $comic->thumb }}" alt=""></td>
              <td>${{ $comic->price }}</td>
              <td>{{ $comic->series }}</td>
              <td>{{ $comic->sale_date }}</td>
              <td>{{ $comic->type }}</td>
              <td><a href="{{ route('comics.edit', $comic) }}" class="btn btn-secondary btn-sm">Edit</a></td>
            </tr>
        @empty
            <tr>
              <td colspan="6">
                No comics found
              </td>
            </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</section>
@endsection