@extends('layout')
@section('content')
    <div class="text-center mt-4">
        <h2>Edit contact</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ Route('contact.update', $contact->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required placeholder="Enter Name" value="{{ $contact->name }}">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" required placeholder="Enter Email" value="{{ $contact->email }}">
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" value="{{ $contact->phone }}">
                </div>
                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{ $contact->address }}">
                </div>
                <div class="form-group mt-2">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-danger" value="Cancel">
                </div>
            </form>
        </div>
    </div>
    
    
@endsection