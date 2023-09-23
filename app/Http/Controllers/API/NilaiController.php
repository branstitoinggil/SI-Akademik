<?php

namespace App\Http\Controllers\API;

use App\Models\nilai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NilaiController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    function get($id = null){
        try{
            if (isset($id)) {
                $Nilai = Nilai::findOrFail($id);
                return response()->json(['msg' => 'Data retrieved', 'data' => $Nilai], 200);
            } else {
                $Nilai = Nilai::get();
                return response()->json(['msg' => 'Data retrieved', 'data' => $Nilai], 200);
            }
        }catch (\Throwable $e){
            return response()->json([
                'message' => "error" . $e->getMessage(),
                'serve' => [],
            ], 500);
        }

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
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(nilai $nilai)
    {
        //
    }
}
