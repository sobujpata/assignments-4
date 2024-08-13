@extends('layout')
    @section('content')
    <div class="container">
        <div class="herader text-center mt-4">
            <h2>Contact Management Application</h2>
        </div>
        <div class="main-content">
            <div class="row mt-4 mb-3">
                <div class="col-md-4">
                    <form action="{{ route('contact.index') }}" method="get">
                        <div class="row">
                        <div class="form-group col-9">
                            <input type="text" name="search" class="form-control">
                        </div>
                        <div class="form-group col-3">
                            <input type="button" value="Search" class="btn btn-primary">
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Sort By
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('contact.index', ['sort'=>'name', 'direction'=>request('direction')==='asc' ? 'desc':'asc']) }}">By Name</a></li>
                            <li><a class="dropdown-item" href="{{ route('contact.index', ['sort' =>'name', 'direction'=>request('direction')==='asc'?'desc':'asc']) }}">By Create Time</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @php
                    $i=1;
                @endphp
                @foreach ($contacts as $contact)
                <tbody >
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td class="text-center">
                            <a class="btn btn-success" href="{{ Route('contact.show', $contact->id) }}">Show</a>
                            <a class="btn btn-info" href="{{ Route('contact.edit', $contact->id) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ Route('contact.delete', $contact->id) }}">Delete</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            {{ $contacts->links() }}
        </div>
    </div>
    @endsection