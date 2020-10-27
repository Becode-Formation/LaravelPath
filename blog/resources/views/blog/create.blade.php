@extends('layout.app')

@section('title', 'Ajouter votre restaurant')

@section('content')
<form action="/resto/create" method="POST">
    {{ csrf_field() }}
    <label for="title">Title of the article</label>
    <input type="text" name="title" id="title">
    <label for="title">Description</label>
    <input type="text" name="description" id="description">
    <input type="submit" value="Submit"></input> 
</form>
@endsection