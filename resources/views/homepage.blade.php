@extends('template.template')
@extends('template.navbar')

@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Welcome to Rumah Musik!</h1>
            <p class="lead">Find the perfect rental for musical day!</p>
        </div>
    </div>

    <!-- Card Section -->
    <div class="row card-container">
            @foreach($instruments as $instrument)
                <div class="col-md-4 pb-4">
                    <div class="card" style="height: 100%;">
                        <div class="card-body" style="height: 250px;">
                            <h5 class="card-title">{{ $instrument->name }}</h5>
                            <p class="card-text">{{ $instrument->description }}</p>
                            <form method="post" action="{{ route('rentNow', ['instrumentId' => $instrument->id]) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">Rent Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</div>
@endsection