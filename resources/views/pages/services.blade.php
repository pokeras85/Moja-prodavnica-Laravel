@extends('izgled.app')

@section('title')
    Services
@endsection


@section('content')

    <h1>Welcome to the services page</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @foreach($products as $product)
<div class="well">
    <h1><a href="/E-commerce/MojaProdavnica/show/{{$product->id}}"> {{$product->name}} </a> </h1>
    <h3>{{$product->price}}</h3>
</div>
    @endforeach
    {{$products->links()}}
@endsection

