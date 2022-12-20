@extends('layouts.app')
@section('page-content')
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <label for="description">Description</label>
        <textarea type="text" name="description" id="description"></textarea>
        <label for="type">type</label>
        <input type="text" name="type" id="type" >
        <label for="image">image</label>
        <input type="text" name="image" id="image">
        <label for="cooking_time">cooking_time</label>
        <input type="text" name="cooking_time" id="cooking_time">
        <label for="weight">weight</label>
        <input type="text" name="weight" id="weight">
        <button type="submit">send</button>
    </form>    
@endsection