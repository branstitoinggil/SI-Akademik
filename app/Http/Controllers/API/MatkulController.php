<?php

namespace App\Http\Controllers\API;

use App\Models\matkul;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatkulController extends Controller
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

    function get($id = null){
        try{
            if (isset($id)) {
                $Matkul = Matkul::findOrFail($id);
                return response()->json(['msg' => 'Data retrieved', 'data' => $Matkul], 200);
            } else {
                $Matkul = Matkul::get();
                return response()->json(['msg' => 'Data retrieved', 'data' => $Matkul], 200);
            }
        }catch (\Throwable $e){
            return response()->json([
                'message' => "error" . $e->getMessage(),
                'serve' => [],
            ], 500);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function show(matkul $matkul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function edit(matkul $matkul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, matkul $matkul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function destroy(matkul $matkul)
    {
        //
    }
}
