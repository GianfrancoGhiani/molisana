@extends('layouts.app')
@section('page-content')
    <h1>Prodotti</h1>
    <ul>
        @foreach ($products as $product)
            <li><a href="{{route('products.show', $product->id)}}">{{$product->title}}</a></li>
        @endforeach
    </ul>
@endsection