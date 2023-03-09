@extends('layouts.app')

{{-- SECTION TITLE --}}
@section('page_title') DC Comics @endsection 

{{-- SECTION MAIN --}}
@section('content')

<div class="container">
    <h1>
      CURRENT SERIES
    </h1>
    <div class="cards-container">
        @foreach ($comics as $comic)        
        <div class="card">
          <div> 
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
          </div>
          <h4 class="bg-dark">
              {{ $comic['series'] }}
          </h4>
        </div>
        @endforeach
    </div>

    <button>
      load more
    </button>
    
  </div>

@endsection
