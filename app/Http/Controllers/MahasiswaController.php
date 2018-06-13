<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Transformers\MahasiswaTransformer;

class MahasiswaController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $mahasiswas = Mahasiswa::all();

        return $this->response->collection($mahasiswas, new MahasiswaTransformer);
    }

    public function showOneMahasiswa($id)
    {
        $mahasiswas = Mahasiswa::find($id);

        return $this->response->item($mahasiswas, new MahasiswaTransformer);
    }

    public function store(Request $request)
    {
        $Mahasiswa = Mahasiswa::create($request->all());

        return response()->json($Mahasiswa, 201);
    }

    public function update($id, Request $request)
    {
        $Mahasiswa = Mahasiswa::findOrFail($id);
        $Mahasiswa->update($request->all());

        return response()->json($Mahasiswa, 200);
    }

    public function delete($id)
    {
        Mahasiswa::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
