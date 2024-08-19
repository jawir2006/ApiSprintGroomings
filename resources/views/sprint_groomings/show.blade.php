@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-secondary text-white text-center">
                <h2>{{ $sprintGrooming->title }}</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Title</th>
                            <td>{{ $sprintGrooming->title }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $sprintGrooming->description }}</td>
                        </tr>
                        <tr>
                            <th>Meeting Date</th>
                            <td>{{ $sprintGrooming->meeting_date }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
