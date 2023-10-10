<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function pengaduan()
    {
        return view('user.pengaduan');
    }

    public function post_pengaduan(Request $request)
    {
        $validated = $request->validate([
            'perihal' => ['required'],
            'nama_terlapor' => ['required'],
            'jabatan_terlapor' => ['required'],
            'perangkat_daerah' => ['required'],
            'tempat_kejadian' => ['required'],
            'tanggal_kejadian' => ['required', 'date'],
            'detail_kejadian' => ['required'],
            'bukti' => ['required'],
            'bukti.*' => ['mimes:doc,docx,PDF,pdf,jpg,jpeg,png'],
        ]);

        $validated['tanggal_pengaduan'] = today();
        $validated['user_id'] = $request->user()->id;

        $files = [];
        foreach ($request->file('bukti') as $file) {
            if ($file->isValid()) {
                $filename = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('bukti', $filename);
                $files[] = [
                    'filename' => $filename,
                ];
            }
        }

        $pengaduan = Pengaduan::create($validated);
        $pengaduan->bukti()->createMany($files);

        return redirect('/dashboard');
    }

    public function view_pengaduan($id)
    {
        $pengaduan = Pengaduan::find($id);

        return view('user.pengaduan.view', [
            'pengaduan' => $pengaduan,
        ]);
    }

    public function cancel_pengaduan($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->status = 'Di Batalkan';
        $pengaduan->save();

        return redirect('/dashboard');
    }

    public function masyarakat()
    {
        return view('user.pengaduan.masyarakat');
    }

    public function pegawai()
    {
        return view('user.pengaduan.pegawai');
    }

    public function daftar(Request $request)
    {
        $attributes = request()->validate([
            'nama' => ['required', 'max:50'],
            'nomor_identitas' => ['required', 'string', 'max:30', Rule::unique('users', 'nomor_identitas')],
            'nomor_telepon' => ['required', 'max:15'],
            'alamat' => ['required'],
            'asal' => ['required'],
            'kartu_identitas' => ['required', 'file', 'mimes:jpeg,png,jpg,gif'],
            'username' => ['required', 'string', 'max:50', Rule::unique('users', 'username')],
            'email' => ['nullable', 'email', 'max:50'],
            'password' => ['required', 'confirmed', 'min:5', 'max:20'],
            'role' => ['required', 'in:pegawai,masyarakat'],
        ]);
        $attributes['password'] = bcrypt($attributes['password']);
        $kartu_identitas = $request->file('kartu_identitas');
        $attributes['kartu_identitas'] = $kartu_identitas->storeAs('kartu_identitas', time() . ' - ' . $request->nama . '.' . $kartu_identitas->getClientOriginalExtension());

        session()->flash('success', 'Your account has been created.');
        $user = User::create($attributes);
        Auth::login($user);
        return redirect('/dashboard');
    }

    public function login()
    {
        return view('user.auth.login');
    }

    public function post_login(Request $request)
    {
        $attributes = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($attributes)) {
            session()->regenerate();
            return redirect('/dashboard')->with(['success' => 'You are logged in.']);
        } else {
            return back()->withErrors(['username' => 'Username or password invalid.']);
        }
    }

    public function lupaPassword()
    {
        return view('user.auth.lupa-password');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login')->with(['success' => 'You\'ve been logged out.']);
    }
}
