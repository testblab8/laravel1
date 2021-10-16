@extends('master');

@section('main')
<section class="register">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-8 offset-md-2">
                @foreach ($posts as $post)
                <div class="card">
                    <div class="card-header">
                        {{ $post->title }} <small class="text-muted">by {{ $post->user->name }}</small>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $post->body }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection