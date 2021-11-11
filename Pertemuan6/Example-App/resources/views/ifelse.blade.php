@extends('layout')
@section('content')
        @php
          $rating = 76;
        @endphp
        @if (($rating >= 0) and ($rating <= 75))
           <div class="alert alert-danger d-inline-block">
              Bad Movie
           </div>
        @else
           <div class="alert alert-success d-inline-block">
               Good Movie 👍
           </div>
        @endif
@endsection        