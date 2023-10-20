@extends('admin.admin_master')
@section('admin')
@section('tittle')
    Pembelian
@endsection



<div class="container-fluid pt-4 px-4">

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif





    <!-- <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data"> -->
    <div class="bg-secondary rounded h-100 p-4">


        <h6 class="mb-4">Resi Transaksi</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        {{-- <th scope="col">No</th> --}}
                        <th scope="col">Nama Tugas</th>
                        <th scope="col">Waktu Tugas</th>
                        <th scope="col">Tugas User</th>
                        <th scope="col">Detail Tugas </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($tugas as $row)
                            <td>{{ $row->namatugas }}</td>
                            <td>{{ $row->userID }}</td>
                            <td>{{ $row->deadline }}</td>
                            <td>
                                <a href="{{ route('detail_tugas_staff', $row->tugasID) }}"
								class="btn btn-info"><i class="fas fa-book"></i></a>

                            </td>
                    </tr>
                    @endforeach
                    </tr>


            </table>
            {{-- {{ $alltransaksi->appends(Request::all())->links() }} --}}
        </div>

        <!-- </form> -->

    </div>


</div>


@endsection
