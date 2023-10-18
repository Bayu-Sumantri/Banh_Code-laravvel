<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Responsive</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.5) 75%, #000 100%), url(https://img.freepik.com/free-photo/computer-program-code_1385-635.jpg?w=740&t=st=1663042322~exp=1663042922~hmac=ed7b4f724a3847d58e3b4b1e80db665c5387e386685badc9c95ffe5f12c3a6d3);
        background-size: cover;
        background-repeat: no-repeat;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .card {
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h2 {
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    input {
        margin: 10px 0;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        background: blue;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background: #0066cc;
    }

    .price-new {
        color: red;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="card w-75"> <!-- Menambahkan class w-75 untuk lebar 75% -->
            <h2 class="card-title">Transaksi</h2>
            <h2 class="text-left">Class {{ old('namakelas', $kelas->namakelas) }}</h2>
            <div class="card-body">
                <form action="{{ route('BuyKelas') }}" method="post">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="kelasID" value="{{ old('kelasID', $kelas->kelasID) }}" readonly>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nama" name="name"
                            value="{{ Auth::user()->name }}" readonly>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your Email" name="email">
                    </div>
                    <div class="mb-3">
                        <p>Metode Pembayaran</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="metode_pembayaran" id="dana_muncul"
                                value="dana">
                            <label class="form-check-label" for="dana_muncul">DANA</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="metode_pembayaran" id="bank_muncul"
                                value="bank">
                            <label class="form-check-label" for="bank_muncul">Bank Indonesia</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="rekening" id="rekeningLabel" style="display: none">Nomor Rekening Bank:</label>
                        <input type="text" class="form-control" id="bank_form_muncul" style="display: none;"
                            name="rek_bank" placeholder="Enter Your Rekening Bank">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" id="teleponLabel" style="display: none">Nomor Telepon Dana:</label>
                        <input type="text" class="form-control" id="dana_form_muncul" style="display: none;"
                            name="no_dana" placeholder="Enter Your Number Dana">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Telepon"
                            placeholder="nomor telepon pengguna" name="no_telepon">
                    </div>
                    <div class="card-price">
                        <span class="price-new">Rp{{ old('harga', $kelas->harga) }}</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Your existing HTML code here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.js"></script>

    <script>
        $(document).ready(function() {
            $("#dana_muncul").click(function() {
                $("#dana_form_muncul").show("slow");
                $("#bank_form_muncul").hide("slow");
            });
            $("#bank_muncul").click(function() {
                $("#bank_form_muncul").show("slow");
                $("#dana_form_muncul").hide("slow");
            });
        });
    </script>
</body>

</html>
