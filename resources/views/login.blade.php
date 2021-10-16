@extends('master');

@section('main')
<section class="register">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 offset-md-3">
                <h2 class="mb-4">Login</h2>
                <form action="{{ route('login.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary float-right">Create Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection