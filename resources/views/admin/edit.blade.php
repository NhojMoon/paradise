@extends('layouts.app')
  
@section('title', 'Edit User')
  
@section('contents')
    <h1 class="mb-0">Edit User</h1>
    <hr />
    <form action="{{ route('admin.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ $admin->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $admin->email }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Role</label>
                <input type="text" name="role" class="form-control" placeholder="Role" value="{{ $admin->role }}" >
            </div>
            <div class="col">
            <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" value="{{ $admin->role }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Status</label>
                <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $admin->status }}" >
            </div>
        </div>
       
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection