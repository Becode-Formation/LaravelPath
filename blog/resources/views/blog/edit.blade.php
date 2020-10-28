@extends('layout.app')

@section('title', 'Edit your restaurant informations')

@section('content')
    <form method="POST" action="/edit/{{ $resto->id }}">
        {{ csrf_field()}}
        {{ method_field('PATCH') }}
        <input type="text" name="title" placeholder="Title" value="{{ $resto->title }}">
        <input type="text" name="description" placeholder="Description" value="{{ $resto->description }}">
        <input type="submit" value="Yeah"></input> 
    </form>

    @if($errors->has('title'))
        <small class="error">{{ $errors->first('title') }}</small>
    @endif

@endsection