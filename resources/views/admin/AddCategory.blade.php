@extends('admin.izgled.app')
@section('title')
    Add category
@endsection

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

@section('content')
<div class="grid-margin">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create category</h4>
                <form class="cmxform" id="commentForm" method="POST" enctype="multipart/form-data" action="{{url('/admin/category/store')}}" >
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <label for="cname">Product category</label>
                            <input id="cname" class="form-control" name="name" minlength="2" type="text" required>
                            <br>
                            <input type="submit" class="btn btn-primary" name="submit" value="ADD">
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
