@extends('layout')
    @section('content')
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="{{ Route('contact.index') }}">CMS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="{{ Route('contact.index') }}">Contacts</a>
              </li>
              <li>
                <a class="nav-link text-white" aria-current="page" href="{{ Route('contact.create') }}">Create Contact</a>  
              </li>          
            </ul>
          </div>
        </div>
    </nav>
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
                <div class="col-md-4">
                </div>
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
    @endsection