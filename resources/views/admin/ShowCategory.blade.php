@extends('admin.izgled.app')

@section('title')
    Categories
@endsection


@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Categories</h4>
            @section('status')
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            @endsection
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th >Order #</th>
                                <th class="col-6">Category name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="{{route('EditCategory',$category->id)}}" class="btn btn-outline-primary">edit</a>
                                    &nbsp
                                    <a onclick="return confirm('Are you sure?')" href="{{route('DeleteCategory',$category->id)}}" class="btn btn-outline-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->


@endsection

@section('script')
    <script src="{{asset('public/Backend/js/data-table.js')}}"></script>
@endsection

