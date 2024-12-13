@extends('navbar.navbar')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Scholarship Details</h1>
    <div class="row">
        @foreach($scholarships as $scholarship)
        <div class="col-md-6 mx-auto">
            <div class="card mb-4">
                <img src="{{ $scholarship->photo }}" class="card-img-top" alt="{{ $scholarship->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $scholarship->name }}</h5>
                    <p class="card-text">Organization: {{ $scholarship->organization_name }}</p>
                    <p class="card-text">{{ $scholarship->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection