<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'judul' => 'Welcome To My First Site',
            'paragraf'=> 'Lorem ipsum dolor, sit amet consectetur adipis'
        ];
        return view('pages.home', $data);
    }
    public function biodata()
    {
        $data = [
            'nama' => 'Salman Hasyim A',
            'lahir' => 'Sumedang, 24 Juli 2003',
            'hobi' => 'Tidur',
            'jk' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat' => 'Jl GKPN No 68',
            'telp' => '089512929676',
            'email' =>'salmanhasyim07@gmail.com'
        ];
        return view('pages.biodata', $data);
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
}
