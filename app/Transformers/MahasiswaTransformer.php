<?php

namespace App\Transformers;

use App\Mahasiswa;

use League\Fractal\TransformerAbstract;

class MahasiswaTransformer extends TransformerAbstract
{
    public function transform(Mahasiswa $mahasiswa)
    {
        return [
            'nim' => $mahasiswa->nim,
            'nama' => $mahasiswa->nama,
            'fakultas' => $mahasiswa->fakultas,
            'prodi' => $mahasiswa->prodi
        ];
    }
}