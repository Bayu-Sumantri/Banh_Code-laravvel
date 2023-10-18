@extends('admin.admin_master')
@section('admin')
@section('tittle')
    Admin User Edit
@endsection





<div class="container-fluid pt-4 px-4">

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('user_update', $user->id) }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputtext" value="{{ old('name', $user->name) }}" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" value="{{ old('email', $user->email) }}" name="email"
                    placeholder="Enter email">
            </div>
             @if ($user->Profile)
                    <img class="user"  src="{{ \Illuminate\Support\Facades\Storage::url($user->Profile) }}"
                        alt="">
                @endif
            <div class="form-group">
                <label for="exampleInputFile">Photo Profile</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="Profile">
                        <label class="custom-file-label" for="exampleInputFile">Choose img</label>
                    </div>
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
