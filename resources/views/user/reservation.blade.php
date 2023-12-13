@extends('template.template')
@extends('template.navbar')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Welcome to Rumah Musik!</h1>
            <p class="lead">Your Reservation Details Form</p>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th style="font-weight: bold;">Name</th>
                <th style="font-weight: bold;">Type</th>
                <th style="font-weight: bold;">Brand</th>
                <th style="font-weight: bold;">Description</th>
                <th style="font-weight: bold;">Stock Quantity</th>
                <th style="font-weight: bold;">Rental Price</th>
                <th style="font-weight: bold;">Condition</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instruments as $instrument)
                <tr>
                    <td>{{ $instrument->name }}</td>
                    <td>{{ $instrument->type }}</td>
                    <td>{{ $instrument->brand }}</td>
                    <td>{{ $instrument->description }}</td>
                    <td>{{ $instrument->stock_quantity }}</td>
                    <td>{{ $instrument->rental_price }}</td>
                    <td>{{ $instrument->condition }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row justify-content-end">
        <div class="col-lg-2">
            <p class="font-weight-bold">Total Price: Rp{{ $totalPrice }}</p>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ route('showReservationHistory') }}">Pay</a>
        </div>
    </div>
</div>

@section('content')
@endsection