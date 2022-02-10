@extends('admin.izgled.app')

@section('title')
   Products
@endsection


@section('content')

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data table</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Image</th>
                                        <th>Name product</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><img src="{{asset('\public\storage\ProductImages/'.$product->image)}}" alt="No image"></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->category}}</td>
                                        <td>
                                            @if($product->status=='on')
                                            <label class="badge badge-success">{{$product->status}}</label>
                                                @else
                                            <label class="badge badge-danger">{{$product->status}}</label>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('/admin/product/edit/'.$product->id)}}" class="btn btn-outline-primary" id="delete">Edit</a>
                                            <a href="{{url('/admin/product/destroy/'.$product->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger"> Delete</a>
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
