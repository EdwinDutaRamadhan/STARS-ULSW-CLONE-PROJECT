<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Beasiswa;
use App\Models\Dispensasi;
use App\Models\KKM;
use App\Models\PKM;
use App\Models\User;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $role = Auth::user()->role;
            switch ($role) {
                case 'Admin-Master':
                    # code...
                    break;
                case 'Admin-Beasiswa':
                    # code...
                    break;
                case 'Admin-Dispensasi':
                    # code...
                    break;
                case 'Admin-PKM':
                    # code...
                    break;
                case 'Admin-KKM':
                    # code...
                    break;
                case 'Mahasiswa':
                    return redirect('home/mahasiswa/dashboard');
                    break;
                case 'Dosen':
                    # code...
                    break;

                default:
                    # code...
                    break;
            }
        } else {
            return redirect('/home/mahasiswa/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //@ddd($request);
        $credentials = $request->validate([
            'nim' => 'required|max:9',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/home/mahasiswa/dashboard');
        }
        return back()->with('login', 'username atau password salah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($mahasiswa)
    {
        switch ($mahasiswa) {
            case 'login':
                return view('auth.login-mahasiswa');
                break;
            case 'dashboard':
                $OMB = 0;
                $dataOMB = KKM::where('kelompok', 'OMB')->get();
                foreach ($dataOMB as $d) {
                    $OMB += $d['poin'];
                }
                $userId = Auth::user()->id;
                return view('public.mahasiswa.dashboard', [
                    'profile' => User::find($userId)->info,
                    'module' => $mahasiswa,
                    'kegiatan' => count(KKM::all()),
                    'dispensasi' => count(Dispensasi::all()),
                    'beasiswa' => count(Beasiswa::all()),
                    'pkm' => count(PKM::all()),
                    'OMB' => $OMB
                ]);
                break;

            default:
                # code...
                break;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
