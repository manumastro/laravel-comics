@extends('layouts.main')

@section('content')

<section id="comics">
  <div class="container d-flex flex-wrap">

    @foreach ($comics as $comic)
      <div class="d-flex justify-content-center align-items-start comic-card">
        <a class="d-flex justify-content-center align-items-center flex-column" href="#">
          <img src="{{ $comic->image }}" alt="">
          <span>{{ $comic->title }}</span>
        </a>
      </div>
    @endforeach

  </div>
  <div class="load-more">
    <a href="#"><button>load more</button></a>
  </div>
</section>
@endsection