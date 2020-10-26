@extends('layout.app')

@section('title', 'Post page !')

@section('content')
        <p> TEST </p>
       @foreach($data as $restaurant)
       <h2>{{ $restaurant->title }}</h2>
       <p>{{ $restaurant->description }}</p>
       @endforeach
@endsection