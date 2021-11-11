@extends('layout')
@section('content')
        @php
          $nilai = 25;
        @endphp
        @if (($nilai >= 0) and ($nilai <= 100))
           <div class="alert alert-success d-inline-block">
              Congratulations 👍👍👍👍
           </div>
        @endif
@endsection        