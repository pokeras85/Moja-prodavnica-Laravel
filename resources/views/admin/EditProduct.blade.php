
@extends('admin.izgled.app')

@section('title')
    Edit products
@endsection


@section('content')
    <div class="grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit products</h4>

                    @section('status')

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    @endsection

                    <form class="cmxform" id="commentForm" enctype="multipart/form-data" method="POST" action="{{route('UpdateProduct', $products->id)}}">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="cname">Product name</label>
                                <input id="cname" class="form-control" name="name" minlength="2" type="text" value="{{$products->name}}" required>
                            </div>
                            <div class="form-group">
                                <label for="cname">Price</label>
                                <input id="cname" class="form-control" name="price" minlength="2" type="number" value="{{$products->price}}" required>
                            </div>
                            <div class="form-group">
                                <label id= "sakri" for="cname">Old image: {{$products->image}} </label>
                                <br>
                                <label for="cname">Chose new images</label>
                                <input id="cname" onclick='document.getElementById("sakri").style.visibility = "hidden";' class="form-control"name="image"  type="file">
                            </div>
                            <div class="form-group">
                                <label for="cname">Choice category</label>
                                <select id="cname" class="form-control" name="category"  required>
                                    <option>Odaberi kategoriju</option>
                                    {{$categories = \App\Category::all()}}
                                    @foreach($categories as $category)
                                        <option @if($category->name==$products->category) selected @endif">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cname">Status</label>
                                <input id="cname" class="form-control" name="status"  type="checkbox" @if($products->status == "on")  checked @endif>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="UPDATE">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('public/Backend/js/bt-maxLength.js')}}"></script>
@endsection

