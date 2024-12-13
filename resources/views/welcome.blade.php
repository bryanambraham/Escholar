@extends('navbar.navbar')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Welcome to Our Homepage</h1>
    <div class="row">
        @foreach($scholarships as $scholarship)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $scholarship->photo }}" class="card-img-top" alt="{{ $scholarship->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $scholarship->name }}</h5>
                    <p class="card-text">{{ ($scholarship->description) }}</p>
                    <a href="{{ route('scholarships-detail', $scholarship->id) }}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection