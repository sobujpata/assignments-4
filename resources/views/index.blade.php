@extends('layout')
    @section('content')
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
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th><a href="{{ route('contact.index', ['sort'=>'name', 'direction'=>request('direction')==='asc' ? 'desc':'asc']) }}">Name</a></th>
                        <th>Email</th>
                        <th><a href="{{ route('contact.index', ['sort' =>'name', 'direction'=>request('direction')==='asc'?'desc':'asc']) }}">Created At</a></th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($contacts as $contact)
                <tbody >
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td class="text-center"><a class="btn btn-success" href="#">Show</a>
                        <a class="btn btn-info" href="#">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            {{ $contacts->links() }}
        </div>
    @endsection