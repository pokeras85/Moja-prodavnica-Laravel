
@extends('admin.izgled.app')

@section('title')
Add products
@endsection


@section('content')
    <div class="grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create products</h4>

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

                    <form class="cmxform" id="commentForm" enctype="multipart/form-data" method="POST" action="{{url('/admin/product/store')}}">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="cname">Product name</label>
                                <input id="cname" class="form-control" name="name" minlength="2" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="cname">Price</label>
                                <input id="cname" class="form-control" name="price" minlength="2" type="number" required>
                            </div>
                            <div class="form-group">
                                <label for="cname">Product image</label>
                                <input id="cname"  name="image" minlength="2" type="file">
                            </div>
                            <div class="form-group">
                                <label for="cname">Choice category</label>
                                <select id="cname" class="form-control" name="category"  required>
                                    <option>Odaberi kategoriju</option>
                                    {{$categories = \App\Category::all()}}
                                    @foreach($categories as $category)
                                    <option>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cname">Status</label>
                                <input id="cname" class="form-control" name="status"  type="checkbox">
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="ADD">
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
