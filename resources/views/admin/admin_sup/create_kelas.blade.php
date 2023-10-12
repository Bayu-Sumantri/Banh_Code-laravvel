@extends('admin.admin_master')
@section('admin')
@section('tittle')
    Kelas Create
@endsection





<div class="container-fluid pt-4 px-4">

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('Kelas.store') }}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Kelas</label>
                <input type="text" class="form-control" id="exampleInputtext" name="namakelas" placeholder="Enter Nama Kelas">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="deskripsikelas"
                    placeholder="Enter Deskripsi Kelas">
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
