@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white text-center">
                <h3>Sprint Groomings</h3>
            </div>
            <div class="card-body">
                <div class="text-right mb-3">
                    <a href="{{ route('sprint_groomings.create') }}" class="btn btn-primary">Create New Sprint Grooming</a>
                </div>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Meeting Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sprintGroomings as $sprintGrooming)
                            <tr>
                                <td><a href="{{ route('sprint_groomings.show', $sprintGrooming->id) }}">{{ $sprintGrooming->title }}</a></td>
                                <td>{{ $sprintGrooming->description }}</td>
                                <td>{{ $sprintGrooming->meeting_date }}</td>
                                <td><a href="{{ route('sprint_groomings.edit', $sprintGrooming->id) }}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="{{ route('sprint_groomings.destroy', $sprintGrooming->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
