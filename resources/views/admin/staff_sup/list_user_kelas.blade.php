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
                        <th scope="col">Username</th>
                        <th scope="col">Gmail</th>
                        <th scope="col">Nama Kelas</th>
                        <th scope="col">Metode Pembayaran</th>
                        <th scope="col">Nomor / Rekening Transaksi</th>
                        <th scope="col">Waktu Transaksi</th>
                            <th scope="col">Cetak</th>
                            <th scope="col">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($alltransaksi as $row)
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->kelasID }}</td>
                            <td>{{ $row->metode_pembayaran }}</td>
                            <td>
                                @if ($row->metode_pembayaran === 'dana')
                                    {{ $row->no_dana }}
                                @elseif ($row->metode_pembayaran === 'bank')
                                    {{ $row->rek_bank }}
                                @endif
                            </td>
                            <td>{{ $row->updated_at->diffForHumans() }}</td>
                            <td><form method="post" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{ $row->name  }}?..')" action="{{ route('delate_destroy', [$row->transaksiID]) }}">
							@csrf
							{{ method_field('DELETE') }}
                            <a target="_blank" href="{{ route('resi_pembelian', $row->transaksiID) }}" class="btn btn-primary float-left"><i class="fas fa-print"></i></a>
							</td>
                            <td>
								<button type="submit" class="btn btn-danger"><i
									class="fa fa-trash"></i></button>

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
