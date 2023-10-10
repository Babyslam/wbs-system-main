<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return redirect('admin/dashboard');
    }

    public function dashboard()
    {
        return view('dashboard', [
            'pengaduan_masuk' => Pengaduan::count(),
            'pengaduan_ditolak' => Pengaduan::where(['status' => 'Di Tolak'])->count(),
            'pengaduan_tercatat' => Pengaduan::where(['status' => 'Tercatat'])->count(),
            'pengaduan_penelahaan' => Pengaduan::where(['status' => 'Penelahaan'])->count(),
            'pengaduan_audit_investigasi' => Pengaduan::where(['status' => 'Audit Investigasi'])->count(),
            'pengaduan_pelimpahan' => Pengaduan::where(['status' => 'Pelimpahan'])->count(),
        ]);
    }
}
