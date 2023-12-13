@extends('template.template')
@extends('template.navbar')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Welcome to Rumah Musik!</h1>
            <p class="lead">Your Reservation History</p>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th style="font-weight: bold;">User Name</th>
                <th style="font-weight: bold;">Unit Name</th>
                <th style="font-weight: bold;">Rented at</th>
                <th style="font-weight: bold;">Returned at</th>
                <th style="font-weight: bold;">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Customer</td>
                <td>Fame 5 PC Junior Drumset Black Luis</td>
                <td>13 December 2023</td>
                <td>18 December 2023</td>
                <td>On Rent</td>
            </tr>
            <tr>
                <td>Customer</td>
                <td>Samson Live! 612 Series</td>
                <td>2 December 2023</td>
                <td>7 December 2023</td>
                <td>Returned</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection