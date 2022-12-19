<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Pengumuman;
use App\Models\Category;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Landing Page
    public function index()
    {
        $data = Pengumuman::latest()->limit(6)->get();
        foreach ($data as $d) {
            $d['tanggal'] = $this->getDate($d);
        }
        return view('public.landing', ['data' => $data]);
    }
    // Home Page with Pagination
    public function home(){
        return view('public.home', ['data' => Pengumuman::with(['user', 'category'])->paginate(6)]);
    }

    //Category
    public function category($category){
        switch ($category) {
            case 'Beasiswa':
                $data = Pengumuman::where('category_id', 1)->paginate(6);
                break;
            case 'Dispensasi':
                $data = Pengumuman::where('category_id', 2)->paginate(6);
                break;
            case 'KIP':
                $data = Pengumuman::where('category_id', 3)->paginate(6);
                break;
            
            default:
                # code...
                break;
        }
        return view('public.category', ['data'=>$data, 'category' => $category]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $data = Pengumuman::find($id);
        $data['tanggal'] = $this->getDate($data);
        return view('public.detail', ['data' => $data]);
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
    public function getBulan($bulan)
    {
        switch ($bulan) {
            case 1:
                $bulan = 'Januari';
                break;
            case 2:
                $bulan = 'Februari';
                break;
            case 3:
                $bulan = 'Maret';
                break;
            case 4:
                $bulan = 'April';
                break;
            case 5:
                $bulan = 'Mei';
                break;
            case 6:
                $bulan = 'Juni';
                break;
            case 7:
                $bulan = 'Juli';
                break;
            case 8:
                $bulan = 'Agustus';
                break;
            case 9:
                $bulan = 'September';
                break;
            case 10:
                $bulan = 'Oktober';
                break;
            case 11:
                $bulan = 'November';
                break;
            case 12:
                $bulan = 'Desember';
                break;

            default:
                # code...
                break;
        }
        return $bulan;
    }
    public function getDate($data)
    {
        $tanggal = explode('-', $data['created_at']);
        $bulan = $this->getBulan($tanggal[1]);
        $tanggalFinal = substr($tanggal[2], 0, 2) . " " . $bulan . " " . $tanggal[0];
        return $tanggalFinal;
    }
    public static function getDateSingle($data)
    {
        $tanggal = explode('-', $data);
        $bulan = $tanggal[1];
        switch ($bulan) {
            case 1:
                $bulan = 'Januari';
                break;
            case 2:
                $bulan = 'Februari';
                break;
            case 3:
                $bulan = 'Maret';
                break;
            case 4:
                $bulan = 'April';
                break;
            case 5:
                $bulan = 'Mei';
                break;
            case 6:
                $bulan = 'Juni';
                break;
            case 7:
                $bulan = 'Juli';
                break;
            case 8:
                $bulan = 'Agustus';
                break;
            case 9:
                $bulan = 'September';
                break;
            case 10:
                $bulan = 'Oktober';
                break;
            case 11:
                $bulan = 'November';
                break;
            case 12:
                $bulan = 'Desember';
                break;

            default:
                # code...
                break;
        }
        $tanggalFinal = substr($tanggal[2], 0, 2) . " " . $bulan . " " . $tanggal[0];
        return $tanggalFinal;
    }
}
