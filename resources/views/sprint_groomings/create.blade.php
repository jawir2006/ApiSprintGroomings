@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white text-center">
                <h3>Create New Sprint Grooming</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('sprint_groomings.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-md-3 col-form-label text-md-right">Title</label>
                        <div class="col-md-9">
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-3 col-form-label text-md-right">Description</label>
                        <div class="col-md-9">
                            <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="meeting_date" class="col-md-3 col-form-label text-md-right">Meeting Date</label>
                        <div class="col-md-9">
                            <input type="date" id="meeting_date" name="meeting_date" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
