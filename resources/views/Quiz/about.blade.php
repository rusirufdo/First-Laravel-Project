@extends('Quiz.master')

@section('content')

<ul>
@foreach($contacts as $item)
    <li>{{$item}}</li>
@endforeach
</ul>

<p>About Page</p>
About details...
@endsection
