@extends('master');

@section('main')
<section class="register">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-8 offset-md-2">
                <h2 class="mb-4">Create Chirkut</h2>
                <form action="{{ route('posts.store') }}" class="mt-5" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="body" class="form-control" placeholder="Chirkut" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create Chirkut</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection