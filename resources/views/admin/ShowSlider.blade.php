@extends('admin.izgled.app')

@section('title')
    Sliders
@endsection


@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Sliders</h4>

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
                                <th>Number</th>
                                <th>Description one</th>
                                <th>Description two</th>
                                <th>Slider image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $slider)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$slider->description1}}</td>
                                <td>{{$slider->description2}}</td>
                                <td>{{$slider->Slider_image}}</td>
                                <td>
                                    @if($slider->status==1)
                                        <label class="badge badge-success">Active</label>
                                    @else
                                        <label class="badge badge-danger">Unactive</label>
                                        @endif
                                </td>

                                <td>
                                    <button class="btn btn-outline-primary" onclick="window.location='{{url('/admin/slider/edit/'.$slider->id)}}'">Edit</button>

                                    <button class="btn btn-outline-danger"  onclick="return confirm('Delete this?') , window.location='{{url('/admin/slider/destroy/'.$slider->id)}}'">Delete</button>

                                    @if($slider->status==0)
                                        <button class="btn btn-outline-success" onclick="window.location='{{url('/admin/slider/activate/'.$slider->id)}}'">Activate</button>
                                    @else
                                        <button class="btn btn-outline-danger" onclick="window.location='{{url('/admin/slider/unactivate/'.$slider->id)}}'">Unactivate</button>
                                    @endif
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


