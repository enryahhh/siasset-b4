<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Kategori;
use App\Support\GeneratePrimaryHelper;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Kategori');
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
        $kode = $this->generateKode();
        $data = $request->validate([
            'kategori' => ['required','unique:kategori,nama_kategori']
        ],[
            'required' => 'Kategori Tidak Boleh Kosong',
            'unique' => 'Kategori tersebut sudah ada.'
        ]);

        $kategori = Kategori::create(['id_kategori'=>$kode,'nama_kategori'=>$data['kategori']]);
        if($kategori){
            $type = 'success';
            $message = 'Berhasil Menambah Kategori';
        }else{
            $type = 'error';
            $message = 'Gagal Menambah Kategori';
        }
        return redirect('kategori.index')->with('notif',
        [
            'type' => $type,
            'message'=>$message
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function generateKode(){
        $id = Kategori::withTrashed()->select('id_kategori')->latest()->first();  
        $primary = new GeneratePrimaryHelper('KT',$id);
        return $primary->createCode();
    }
}
