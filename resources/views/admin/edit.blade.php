@extends('layouts.main')

@section('title', 'Edit')

@section('content')

    <form action="{{route('contacts.store', $contact->id)}}" method="POST" style="margin: auto; width: 500px;">
        @csrf

        <div class="row mb-3">
            <label for="firstName" class="col-sm-2 col-form-label">First_Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstName" name="firstName" value="{{$contact->first_name}}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="lastName" class="col-sm-2 col-form-label">Last_Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastName" name="lastName" value="{{$contact->last_name}}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="reminder" class="col-sm-2 col-form-label">Reminder:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="reminder" name="reminder" value="{{$contact->reminder}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" value="{{$contact->contact}}" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <div>
        <a class="page-link" href="{{route('contacts.delete', $contact->id)}}">Delete the record</a>
    </div>

@endsection
