@extends('layout.app')

@section('title', 'Post page !')

@section('content')
    <h2>{{ $resto->title }}</h2>
    <p>{{ $resto->content }}</p>
@endsection