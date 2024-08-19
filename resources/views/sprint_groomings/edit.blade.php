@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-secondary text-white text-center">
                <h2>Edit Sprint Grooming</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('sprint_groomings.update', $sprintGrooming->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Title</th>
                                <td>
                                    <input type="text" id="title" name="title" class="form-control" value="{{ $sprintGrooming->title }}" required>
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>
                                    <textarea id="description" name="description" class="form-control" required>{{ $sprintGrooming->description }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Meeting Date</th>
                                <td>
                                    <input type="date" id="meeting_date" name="meeting_date" class="form-control" value="{{ $sprintGrooming->meeting_date }}" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-left">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
