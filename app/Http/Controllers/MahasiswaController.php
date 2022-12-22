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
    public function index($role)
    {
        if (Auth::user()) {
            switch ($role) {
                case 'Mahasiswa':
                    if (Auth::user()->role == 'Mahasiswa') {
                        return true;
                    } else {
                        return false;
                    }

                    break;
                case 'Dosen':
                    # code...
                    break;

                default:
                    # code...
                    break;
            }
        } else {
            return false;
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
        if ($this->index('Mahasiswa')) {
            $userId = Auth::user()->id;
            switch ($mahasiswa) {
                case 'login':
                    return view('auth.login-mahasiswa');
                    break;
                case 'logout':
                    Auth::logout();
                    session()->invalidate();
                    session()->regenerateToken();
                    return redirect('/home/mahasiswa/login');
                    break;
                case 'dashboard':
                    $OMB = 0;$KProfesional = 0;$KBP = 0;$KPenunjang = 0;
                    $dataOMB = KKM::where('user_id', $userId)->where('k_k_m_category_id', 1)->get();
                    foreach ($dataOMB as $d) {
                        $OMB += $d['poin'];
                    }
                    $dataKProfesional = KKM::where('user_id', $userId)->where('k_k_m_category_id', 2)->get();
                    foreach ($dataKProfesional as $d) {
                        $KProfesional += $d['poin'];
                    }
                    $dataKBP = KKM::where('user_id', $userId)->where('k_k_m_category_id', 3)->get();
                    foreach ($dataKBP as $d) {
                        $KBP += $d['poin'];
                    }
                    $dataKPenunjang = KKM::where('user_id', $userId)->where('k_k_m_category_id', 4)->get();
                    foreach ($dataKPenunjang as $d) {
                        $KPenunjang += $d['poin'];
                    }
                    return view('public.mahasiswa.dashboard', [
                        'module' => 'Dashboard Mahasiswa',
                        'profile' => User::find($userId)->info,
                        'kegiatan' => count(KKM::where('user_id', $userId)->get()),
                        'dispensasi' => count(Dispensasi::where('user_id', $userId)->get()),
                        'beasiswa' => count(Beasiswa::where('user_id', $userId)->get()),
                        'pkm' => count(PKM::where('user_id', $userId)->get()),
                        'OMB' => $OMB,
                        'KProfesional' => $KProfesional,
                        'KBP' => $KBP,
                        'KPenunjang' => $KPenunjang,
                    ]);
                    break;
                case 'dispensasi':
                    return view('public.mahasiswa.dashboard', [
                        'module' => 'History Dispensasi',
                        'profile' => User::find($userId)->info,
                        'data' => Dispensasi::where('user_id', $userId)->paginate(10)
                    ]);
                    break;
                case 'beasiswa':
                    return view('public.mahasiswa.dashboard', [
                        'module' => 'History Beasiswa',
                        'profile' => User::find($userId)->info,
                        'data' => Beasiswa::where('user_id', $userId)->paginate(10)
                    ]);
                    break;
                case 'pkm':
                    return view('public.mahasiswa.dashboard', [
                        'module' => 'PKM',
                        'profile' => User::find($userId)->info,
                        'data' => PKM::where('user_id', $userId)->paginate(10)
                    ]);
                case 'kkm':
                    return view('public.mahasiswa.dashboard', [
                        'module' => 'Kredit Keaktifan Mahasiswa',
                        'profile' => User::find($userId)->info,
                        'data' => KKM::where('user_id', $userId)->paginate(10)
                    ]);
                    break;
                default:
                    # code...
                    break;
            }
        } else {
            return view('auth.login-mahasiswa');
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
