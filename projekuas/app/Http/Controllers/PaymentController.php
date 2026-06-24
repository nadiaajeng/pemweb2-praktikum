<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Post;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_id'           => 'required|exists:posts,id',
            'nama_lengkap'      => 'required|string',
            'no_whatsapp'       => 'required|string',
            'email'             => 'required|email',
            'tanggal_ambil'     => 'required|date',
            'jam_ambil'         => 'required',
            'tanggal_kembali'   => 'required|date|after:tanggal_ambil',
            'jam_kembali'       => 'required',
            'layanan_tambahan'  => 'required|string',
            'metode_pembayaran' => 'required|in:kartu_kredit,transfer_bank,qris,transfer_manual',
        ]);

        $car       = Post::findOrFail($request->post_id);
        $start     = \Carbon\Carbon::parse($request->tanggal_ambil);
        $end       = \Carbon\Carbon::parse($request->tanggal_kembali);
        $durasi    = $start->diffInDays($end);
        $extraCost = match($request->layanan_tambahan) {
            'sopir'     => 200000,
            'sopir_bbm' => 350000,
            default     => 0,
        };
        $hargaPerHari = $car->price_per_day + $extraCost;
        $totalHarga   = $hargaPerHari * $durasi;

        $booking = Booking::create([
            'post_id'           => $car->id,
            'nama_lengkap'      => $request->nama_lengkap,
            'no_whatsapp'       => $request->no_whatsapp,
            'email'             => $request->email,
            'tanggal_ambil'     => $request->tanggal_ambil,
            'jam_ambil'         => $request->jam_ambil,
            'tanggal_kembali'   => $request->tanggal_kembali,
            'jam_kembali'       => $request->jam_kembali,
            'durasi_hari'       => $durasi,
            'layanan_tambahan'  => $request->layanan_tambahan,
            'harga_per_hari'    => $hargaPerHari,
            'total_harga'       => $totalHarga,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pembayaran' => 'pending',
        ]);

        if ($request->metode_pembayaran === 'transfer_manual') {
            return redirect()->route('payment.transfer', $booking->id);
        }

        // Simulasi pembayaran (kartu kredit, transfer bank, qris)
        return redirect()->route('payment.simulate', $booking->id);
    }

    public function simulate($id)
    {
        $booking = Booking::with('post.brand')->findOrFail($id);
        return view('payment.simulate', compact('booking'));
    }

    public function processSimulate($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update(['status_pembayaran' => 'paid']);
        return redirect()->route('payment.success', $booking->id);
    }

    public function transferForm($id)
    {
        $booking = Booking::with('post.brand')->findOrFail($id);
        return view('payment.transfer', compact('booking'));
    }

    public function uploadBukti(Request $request, $id)
    {
        $request->validate(['bukti_transfer' => 'required|image|max:2048']);
        $booking = Booking::findOrFail($id);
        $path    = $request->file('bukti_transfer')->store('bukti_transfer', 'public');
        $booking->update([
            'bukti_transfer'    => $path,
            'status_pembayaran' => 'pending',
        ]);
        return redirect()->route('payment.success', $booking->id);
    }

    public function success($id)
    {
        $booking = Booking::with('post.brand')->findOrFail($id);
        return view('payment.success', compact('booking'));
    }
}