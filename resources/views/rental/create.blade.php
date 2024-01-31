@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Add Rental</h1>
    <hr />
    <form action="{{ route('rentals.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="rental_type" class="form-control" placeholder="Rental_Type">
            </div>
            <div class="col">
                <input type="text" name="customer_id" class="form-control" placeholder="Customer_ID">
            </div>
            <div class="col">
                <input type="text" name="start_date" class="form-control" placeholder="Start_Date">
            </div>
            <div class="col">
                <input type="text" name="end_date" class="form-control" placeholder="End_Date">
            </div>
            <div class="col">
                <input type="text" name="total_price" class="form-control" placeholder="Total_Price">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection