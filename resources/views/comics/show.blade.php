@extends('layouts.app')

@section('content')
    
  <section class="py-5">
    <div class="container">
        <div class="d-flex flex-column align-items-center gap-2">
            <h1>{{ $comic->title }}</h1>
            <img src="{{ $comic->thumb }}" alt="" style="height: 500px">
            <p>
                {{ $comic->description }}
            </p>
            <div class="d-flex align-items-center align-self-start gap-1">
                <span class="fw-bold">Price:</span>
                <span>${{ $comic->price }}</span>
            </div>
            <div class="d-flex align-items-center align-self-start gap-1">
                <span class="fw-bold">Series:</span>
                <span>{{ $comic->series }}</span>
            </div>
            <div class="d-flex align-items-center align-self-start gap-1">
                <span class="fw-bold">Sale Date:</span>
                <span>{{ $comic->sale_date }}</span>
            </div>
            <div class="d-flex align-items-center align-self-start gap-1">
                <span class="fw-bold">Type:</span>
                <span>{{ $comic->type }}</span>
            </div>
            <div class="align-self-start">
                <span class="fw-bold">Artists:</span>
                <span>{{ $comic->artists }}</span>
            </div>
            <div class="align-self-start">
                <span class="fw-bold">Writers:</span>
                <span>{{ $comic->writers }}</span>
            </div>
            {{-- <div class="align-self-start">
                <span class="fw-bold">Artists:</span>
                    @forelse ($artists as $key => $artist)
                        <span>{{$artist}}</span>
                        @if ($key < (count($artists)-1))
                            <span>,<span>
                        @endif
                    @empty
                        
                    @endforelse
            </div>
            <div class="align-self-start">
                <span class="fw-bold">Writers:</span>
                    @forelse ($writers as $key => $writer)
                        <span>{{$writer}}</span>
                        @if ($key < (count($writers)-1))
                            <span>,<span>
                        @endif
                    @empty
                        
                    @endforelse
            </div> --}}
        </div>
      
    </div>
  </section>

@endsection