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
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Show Contact</h3>
                </div>
                <div class="card-body">
                    <p>ID: {{ $contact->id }}</p>
                    <p>Name: {{ $contact->name }}</p>
                    <p>Email: {{ $contact->email }}</p>
                    <p>Phone: {{ $contact->phone }}</p>
                    <p>Address: {{ $contact->address }}</p>
                    <p>Created At: {{ $contact->created_at }}</p>
                    <p>Updated At: {{ $contact->updated_at }}</p>
                </div>
            </div>
        </div>
    </div>
    
@endsection