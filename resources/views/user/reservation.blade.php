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
            <tr>
                <td>Fame 5 PC Junior Drumset Black Luis</td>
                <td>Drumset</td>
                <td>Fame</td>
                <td>Mapex Saturn V, 5 Piece Drumset, Natural Maple Burl Finish, Maple/Walnut Hybrid Shell</td>
                <td>1</td>
                <td>Rp250.000</td>
                <td>Good</td>
            </tr>
        </tbody>
    </table>

    <div class="row justify-content-end">
        <div class="col-lg-2">
            <p class="font-weight-bold">Total Price: Rp250.000</p>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ route('showReservationHistory') }}">Pay</a>
        </div>
    </div>
</div>

@section('content')
@endsection
