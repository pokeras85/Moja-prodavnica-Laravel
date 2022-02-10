@extends('admin.izgled.app')
@section('title')
    Edit category
@endsection

@section('status')

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

@section('content')
    <div class="grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit category</h4>
                    <form class="cmxform" id="commentForm" method="POST" enctype="multipart/form-data" action="{{route('UpdateCategory', $category->id)}}" >
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="cname">Product category</label>
                                <input id="cname" class="form-control" name="name" value="{{$category->name}}" type="text" required>
                                <br>
                                <input type="submit" class="btn btn-primary" name="submit" value="Update">
                            </div>
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

