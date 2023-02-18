<?php

namespace App\Http\Controllers;

use App\Models\KumpulanTulisan;
use App\Http\Requests\StoreKumpulanTulisanRequest;
use App\Http\Requests\UpdateKumpulanTulisanRequest;

class KumpulanTulisanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function artikel()
    {
        return view('artikel_ilmiah.index', [
            'tulisan' => KumpulanTulisan::latest()->where(['kategori' => 'artikel_ilmiah'])->get()
        ]);
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
     * @param  \App\Http\Requests\StoreKumpulanTulisanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKumpulanTulisanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KumpulanTulisan  $kumpulanTulisan
     * @return \Illuminate\Http\Response
     */
    public function show(KumpulanTulisan $kumpulanTulisan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KumpulanTulisan  $kumpulanTulisan
     * @return \Illuminate\Http\Response
     */
    public function edit(KumpulanTulisan $kumpulanTulisan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKumpulanTulisanRequest  $request
     * @param  \App\Models\KumpulanTulisan  $kumpulanTulisan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKumpulanTulisanRequest $request, KumpulanTulisan $kumpulanTulisan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KumpulanTulisan  $kumpulanTulisan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KumpulanTulisan $kumpulanTulisan)
    {
        //
    }
}
