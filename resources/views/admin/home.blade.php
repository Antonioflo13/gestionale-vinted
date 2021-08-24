@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Dashboard</h1>
        <h3>I tuoi guadagni di {{ ucfirst($currentMonth->monthName) }}</h3>
        <h3>{{number_format((float)$totalRevenue, 2, ',', '.')}} €</h3>
    </section>
@endsection