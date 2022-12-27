<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class DashboardPengumuman extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter()
    {
        // if (auth()->user()->role != 'Mahasiswa') {
        //     return true;
        // } else {
        //     return redirect()->route('home');
        // }
    }
    public function index()
    {
        if (auth()->user()->role != 'Mahasiswa') {
            return view('admin.pengumuman.index', [
                'data' => Pengumuman::all()
            ]);
        } else {
            abort(404);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengumuman.add', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:200',
            'subtitle' => 'required|max:100',
            'category_id' => 'required',
            'type' => 'required',
            'description' => 'required',
            'image' => 'required|file|max:4096'
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['image'] = $request->file('image')->store('pengumuman-image');
        Pengumuman::create($validatedData);
        return redirect()->route('pengumuman.index')->with('success', 'Insert pengumuman ' . $request->title . ' berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {

        //    if(auth()->user()->role != 'Mahasiswa'){
        //     return view('admin.pengumuman.detail', [
        //         'data' => Pengumuman::find($pengumuman->id)
        //     ]);
        //    }else{
        //     return redirect()->route('admin.pengumuman');
        //    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        if (auth()->user()->role != 'Mahasiswa') {
            return view('admin.pengumuman.edit', [
                'data' => Pengumuman::find($pengumuman->id),
                'categories' => Category::all()
            ]);
        } else {
            return redirect()->route('pengumuman.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $rules = [
            'title' => 'required|max:200',
            'subtitle' => 'required|max:100',
            'category_id' => 'required',
            'type' => 'required',
            'description' => 'required',
        ];
        if($request->file('image')!= null){
            $rules['image'] =  'required|file|max:4096';
        }
        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;
        if($request->file('image')!= null){
            Storage::delete($pengumuman->image);
            $validatedData['image'] = $request->file('image')->store('pengumuman-image');
        }
        
        Pengumuman::where('id', $pengumuman->id)->update($validatedData);
        return redirect()->route('pengumuman.index')->with('warning', 'Update pengumuman ' . $pengumuman->title . ' berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        Pengumuman::destroy($pengumuman->id);
        Storage::delete($pengumuman->image);
        return redirect()->route('pengumuman.index')->with('danger', 'Delete pengumuman dengan ID ' . $pengumuman->id . ' berhasil');
    }
}
