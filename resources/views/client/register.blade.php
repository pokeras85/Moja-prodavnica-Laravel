<!------ Include the above in your HEAD tag ---------->
@extends('izgled.apl')

@section('title')
    login
@endsection

@section('content')

    <form class="form-horizontal" action="{{url('/createAccount')}}" method="POST">
          @csrf
            <div id="legend">
                <legend class="">Register</legend>
            </div>

        <fieldset style="margin-left: 125px">
            <div class="form-group row">
                <!-- Username -->
                <label class="col-1 col-form-label"  for="username">Username</label>
                <div class=" controls">
                    <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                    <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                </div>
            </div>

            <div class="form-group row">
                <!-- E-mail -->
                <label class="col-1 col-form-label" for="email">E-mail</label>
                <div class="controls">
                    <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                    <p class="help-block">Please provide your E-mail</p>
                </div>
            </div>

            <div class="form-group row">
                <!-- Password-->
                <label class="col-1 col-form-label" for="password">Password</label>
                <div class="controls">
                    <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                    <p class="help-block">Password should be at least 4 characters</p>
                </div>
            </div>
<div class="form-group row">
    @if(Session::has('success'))
        <div class="alert-success">   {{Session::get('success')}} </div>
    @endif
    @if(count($errors)>0)
        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
            </ul>
        </div>
        @endforeach
    @endif
</div>
            <div class="control-group">
                <!-- Button -->
                <div class="controls">
                    <button class="btn btn-success">Register</button>
                </div>
            </div>
        </fieldset>
    </form>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection

