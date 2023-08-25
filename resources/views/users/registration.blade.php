@extends('layouts.main')

@section('title', 'Registration')

@section('content')
    <form action="{{route('registration.create')}}" method="POST">
        @csrf

        <div class="row mb-3">
            <label for="firstName" class="col-sm-2 col-form-label">First Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="lastName" class="col-sm-2 col-form-label">Last Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="reminder" class="col-sm-2 col-form-label">Reminder:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="reminder" name="reminder" value="">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
