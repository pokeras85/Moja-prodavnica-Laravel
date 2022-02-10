@extends('izgled.app')

@section('title')
    Services
@endsection


@section('content')

    <h1>Welcome to {{$products->name}}</h1>


        <div class="well">
            <h1>{{$products->name}} </h1>
            <h3>{{$products->price}} dinara/kg </h3>
            <p> {{$products->description}}</p>

            <a href="/E-commerce/MojaProdavnica/edit/{{$products->id}}" class="btn btn-primary"> Edit</a>
            <a onclick="return confirm('Are you sure?')" href="/E-commerce/MojaProdavnica/delete/{{$products->id}}" class="btn btn-danger"> Delete</a>
        </div>


@endsection


