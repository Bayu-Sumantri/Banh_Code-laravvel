<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset("/banhcode/assets/img/Banh Code.ico") }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Report Data User</title>
</head>

<body>
    <h3> Detail Transaksi</h3>
    </hr>
    <table style="width:100%">
        <thead>
            <tr>
                <td bgcolor="red" width="5%">ID</td>
                <td bgcolor="yellow">Name</td>
                <td bgcolor="green">Email</td>
                <td bgcolor="green">Kelas</td>
                <td bgcolor="yellow">Metode Pembayaran</td>
                <td bgcolor="red">Nomor / Rek Pembayaran</td>
                <td bgcolor="red">Waktu Pembayaran</td>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $transaksi->transaksiID }}</td>
                    <td>{{ $transaksi->name }}</td>
                    <td>{{ $transaksi->email }}</td>
                    <td>{{ $transaksi->kelasID }} {{ $transaksi->kelas->namakelas }}</td>
                    <td>{{ $transaksi->metode_pembayaran }}</td>
                     @if ($transaksi->metode_pembayaran === 'dana')
                                    {{ $transaksi->no_dana }}
                                @elseif ($transaksi->metode_pembayaran === 'bank')
                                    {{ $transaksi->rek_bank }}
                                @endif
                    <td>{{ $transaksi->no_telepon }}</td>
                    <td>{{ $transaksi->created_at }}</td>
                </tr>
        </tbody>
    </table>
    <p align="right">
        Date : {{ $transaksi->updated_at }} </br>
        Personal In Charge</br>

        @if (Auth::check())
            <span class="hidden-xs" fontsize=15>{{ Auth::user()->level }}</span>
        @endif
        </br>
        </br>

        </br>
        </br>
        @if (Auth::check())
            <span class="hidden-xs">({{ Auth::user()->name }})</span>
        @endif
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
