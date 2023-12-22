<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App;
use Auth;

class ReportController extends Controller
{
    public function report1($pid)
    {
        $payment = Payment::find($pid);

        if (!$payment) {
            // Ödeme bulunamadı, hata işlemleri burada eklenebilir
            return redirect()->back()->with('error', 'Ödeme bulunamadı.');
        }

        $pdf = App::make('dompdf.wrapper');
        $print = "<div style='margin:20px; padding:20px;'>";
        $print .= "<h1 align='center'>Ödeme Makbuzu</h1>";
        $print .= "<hr/>";
        $print .= "<p> Fis No: <b>" . $pid . "</b></p>";
        $print .= "<p> Tarih: <b>" . $payment->ödemeTarihi . "</b></p>";
        $print .= "<p> Kayit Id: <b>" . $payment->kayitId . "</b></p>";

        $print .= "<hr/>";
        $print .= "<table style='width:100%;'>";
        $print .= "<tr>";
        $print .= "<td>Miktar</td>";
        $print .= "</tr>";

        $print .= "<tr>";
        $print .= "<td> <h3>" . $payment->miktar . " TL" . "</h3></td>";
        $print .= "</tr>";

        $print .= "</table>";
        $print .= "<hr/>";
        $print .= "<span> Basim Tarihi: <b>" . date('Y-m-d') . "</b> </span>";
        $print .= "</div>";

        $pdf->loadHTML($print);
        return $pdf->stream();
    }
}
?>
