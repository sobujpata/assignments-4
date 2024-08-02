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
    <div class="text-center mt-4">
        <h2>Create contact</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ Route('contact.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" required placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address">
                </div>
                <div class="form-group mt-2">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-danger" value="Cancel">
                </div>
            </form>
        </div>
    </div>
    
    
@endsection