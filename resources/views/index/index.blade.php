@extends('layouts.main')

@section('title', 'Contacts')

@section('content')
    <div class="container" style="display: flex; width: 100%;">
        <div style="width: 50%;">
            @if(session()->missing('admin'))
                <a href="{{route('registration')}}">I'm a new citizen. Add my contact!</a>
            @endif
        </div>

        <div style="flex-grow: 1;">
            <p style="text-align:right">
                @if(session()->missing('admin'))
                   <a href="{{route('admin.index')}}">Log In as a supervisor</a>
                @else
                    <a href="{{route('admin.logout')}}">Log Out</a>
                @endif
            </p>
        </div>
    </div>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Contact</th>
            <th scope="col">Reminder</th>
            @if(session()->has('admin'))
                <th scope="col">Edit</th>
            @endif
        </tr>
        </thead>
        <tbody>

        @foreach($contacts as $contact)
            <tr>
                <th scope="row">{{$contact->id}}</th>
                <td>{{$contact->first_name}}</td>
                <td>{{$contact->last_name}}</td>
                <td>{{$contact->contact}}</td>
                <td>{{$contact->reminder}}</td>
                @if(session()->has('admin'))
                    <td><a class="page-link" href="{{route('contacts.edit', $contact->id)}}">Edit</a></td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>



    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @php
                if (isset($_GET['page'])) {
                $page = $_GET['page'];
                } else {
                    $page = 1;
                }
            @endphp

            <li class="page-item"><a class="page-link" href="?page=@if($contacts->onFirstPage())" style="pointer-events: none @else{{$page-1}} @endif">Previous</a></li>
            <li class="page-item"><a class="page-link" href="?page=1" >1</a></li>
            <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
            <li class="page-item"><a class="page-link">...</a></li>
            <li class="page-item"><a class="page-link" href="?page={{$contacts->lastPage()}}">{{$contacts->lastPage()}}</a></li>
            <li class="page-item"><a class="page-link" href="?page=@if($contacts->onLastPage())" style="pointer-events: none @else{{$page+1}} @endif">Next</a></li>
        </ul>
    </nav>




@endsection
