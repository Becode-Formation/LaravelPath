@extends('layout.app')

@section('title', 'Post page !')

@section('content')
       @foreach($restaurant as $data)
       <h2>{{ $data->title }}</h2>
       <p>{{ $data->description }}</p>
       @endforeach
@endsection