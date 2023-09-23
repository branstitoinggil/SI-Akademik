<?php

namespace App\Http\Controllers\API;

use App\Models\Dosen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    function get($id = null){
        try{
            if (isset($id)) {
                $dosen = Dosen::findOrFail($id);
                return response()->json(['msg' => 'Data retrieved', 'data' => $dosen], 200);
            } else {
                $dosen = Dosen::get();
                return response()->json(['msg' => 'Data retrieved', 'data' => $dosen], 200);
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
        $dosen = Dosen::create($request->all());
        return response()->json([
            'msg' => 'Data Berhasil Ditambahkan',
            'data' => $dosen
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());
        return response()->json(['msg' => 'Data Berhasil Diupdate !', 'data' => $dosen], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = dosen::findOrFail($id);
        $dosen->delete();
        return response()->json(['msg' => 'Data deleted'], 200);
    }
}
