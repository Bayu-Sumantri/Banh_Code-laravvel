@extends('admin.admin_master')
@section('admin')
@section('tittle')
    User Create
@endsection





<div class="container-fluid pt-4 px-4">

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('Pengajar.store') }}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputtext" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                    placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                    placeholder="Password">
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="level" id="floatingSelect"
                    aria-label="Floating label select example">
                    <option value="admin">Admin</option>
                    <option value="staff">Staff</option>
                    <option value="user">User</option>
                </select>
                <label for="floatingSelect">Role Account</label>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>
@endsection
