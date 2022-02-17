@extends('guest.layout.base')

@section('documentTitle')
    Movies
@endsection

@section('content')
    <div class="container-fluid-movies">
            @foreach ($movies as $movie)
            <ul>
                <li>{{ $movie->title }}</li>
                <li>{{ $movie->original_title }}</li>
                <li>{{ $movie->nationality }}</li>
                <li>{{ $movie->date }}</li>
                <li>{{ $movie->vote }}</li>
            </ul>
            @endforeach
    </div>
@endsection

@section('scripts')
  <script src="{{asset('js/app.js')}}"></script>
@endsection