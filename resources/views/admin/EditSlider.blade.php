
@extends('admin.izgled.app')

@section('title')
    Edit slider
@endsection


@section('content')
    <div class="grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create slider</h4>

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

                    <form class="cmxform" id="commentForm" enctype="multipart/form-data" method="POST" action="{{route('UpdateSlider', $slider->id)}}">
                        @csrf
                        <fieldset>


                            <div class="form-group">
                                <label for="cname">description one</label>
                                <input id="cname" class="form-control" value="{{$slider->description1}}" name="description_one" minlength="2" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="cname">Description two</label>
                                <input id="cname" class="form-control" name="description_two" value="{{$slider->description2}}" minlength="2" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="cname" id="sakri"> Old image: {{$slider->Slider_image}} </label>
                                <br>
                                <label id="cname"> New image</label>
                                <input id="cname" onclick='document.getElementById("sakri").style.visibility = "hidden";' class="form-control"name="slide_image"  type="file">

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

