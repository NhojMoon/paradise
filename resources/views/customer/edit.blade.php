@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Edit Customer</h1>
    <hr />
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">First_name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First_name" value="{{ $customer->first_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Last_name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last_name" value="{{ $customer->last_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $customer->email }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <input type="number" name="phone" class="form-control" placeholder="Phone" value="{{ $customer->phone }}" >
            </div>
        </div>
       
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection