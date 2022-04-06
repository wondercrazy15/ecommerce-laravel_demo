@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="Email" name="email" aria-describedby="emailHelp">
                    <div id="emailp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="form-group">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="InputPassword">
                </div>
                <!-- <div class="mb-3 form-check"> -->
                    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                <!-- </div> -->
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection