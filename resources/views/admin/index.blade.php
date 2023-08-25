@extends('layouts.main')

@section('title', 'Admin')

@section('content')
    <form action="{{route('admin.login')}}" method="POST"  style="margin: auto; width: 220px;">
        @csrf

        <div class="row mb-3">
            <div class="col-sm-10">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10">
                <label for="password" class="col-sm-2 col-form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Log In</button>
    </form>

    @if(isset($message))
        <p>{{$message}}</p>
    @endif

@endsection


