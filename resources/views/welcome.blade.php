@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to HRIS</h1>
        <p class="lead">A Human Resource Information System designed to streamline your HR processes.</p>
        <hr class="my-4">
        <p>Manage your employees, track attendance, and more with ease.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('index') }}" role="button">Get Started</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Manage Employees</h2>
                <p>Efficiently manage employee information, payroll, and benefits.</p>
            </div>
            <div class="col-md-4">
                <h2>Track Attendance</h2>
                <p>Monitor employee attendance and generate reports effortlessly.</p>
            </div>
            <div class="col-md-4">
                <h2>HR Analytics</h2>
                <p>Gain insights with powerful analytics tools for better decision-making.</p>
            </div>
        </div>
    </div>
@endsection
