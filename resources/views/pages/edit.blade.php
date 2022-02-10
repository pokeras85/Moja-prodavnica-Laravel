@extends('izgled.app')

@section('title')
    Create
@endsection

@section('content')
    <h1>Edit products</h1>


    <form action="{{route('update', $products->id)}}" method="POST" class="form horizontal">

        {{csrf_field()}}

        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text"name="name" class="form-control" id="exampleFormControlInput1" value="{{$products->name}}" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="number"name="price" class="form-control" id="exampleFormControlInput1" value="{{$products->price}}" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{$products->description}}</textarea>
        </div>

        <input type="submit" class="btn btn-primary" name="submit" value="Update">
    </form>
@endsection



