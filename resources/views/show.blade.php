@extends('layout')
@section('content')
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