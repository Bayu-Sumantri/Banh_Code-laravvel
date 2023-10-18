<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PhpOffice\PhpWord\PhpWord;
use App\Http\Controllers\Controller;
use App\Models\Pembelian;
use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\Writer\PDF as WriterPDF;

class CetakResiController extends Controller
{
    public function index()
    {
    $pembelian = Pembelian::orderBy('userID','DESC')->simplePaginate(10);
    $transaksi = Transaksi::all();
    $pdf = Pdf::loadview('admin.user_sup.resi_pembelian',compact('pembelian', 'transaksi'));
    return $pdf->stream();
    }
    
    public function cetakPDF()
    {
        $R_user = User::orderby('created_at','DESC')->get();
        $pdf = Pdf::loadview('report_user.lapuser', compact('R_user'));
        // return $R_user;
        return $pdf->stream();
    }

    public function cetakWord()
    {
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
        $section->addText('Hello, World!');

        $file = storage_path('app/dokumen.docx');
        $phpWord->save($file);

        return response()->download($file);
    }
}