@extends('izgled.app')

@section('title')
    Create
@endsection

@section('content')
    <h1>Create products</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{url('/saveproduct')}}" method="POST" class="form horizontal" enctype="multipart/form-data">

        {{csrf_field()}}

        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text"name="name" class="form-control" id="exampleFormControlInput1" placeholder="name" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="number"name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Add image</label>
            <input type="file" name="filename"  id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>

        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>
@endsection


