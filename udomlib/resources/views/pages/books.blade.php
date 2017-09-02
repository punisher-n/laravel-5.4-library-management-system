@extends ('pages.head_test')
@section('content')
<hr>
    @foreach($books as $book)
        <book>
           <a href="books/{{$book -> id}}"><h4>{{ $book -> name }}</h4></a>

            <p>{{ $book -> author }}</p>

            <p>{{$book -> title}}</p>
        </book>

    @endforeach
@endsection
@extends('pages.footer')



