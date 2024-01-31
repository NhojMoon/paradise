@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Customer's Detail</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">First_name</label>
            <input type="text" name="first_name" class="form-control" placeholder="First_name" value="{{ $customer->first_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Last_name</label>
            <input type="text" name="last_name" class="form-control" placeholder="Last_name" value="{{ $customer->last_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $customer->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Phone</label>
            <input type="number" name="phone" class="form-control" placeholder="Phone" value="{{ $customer->phone }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $customer->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $customer->updated_at }}" readonly>
        </div>
    </div>
@endsection