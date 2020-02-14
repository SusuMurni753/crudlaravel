<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function kelas(){
        return $this->belongsTo('App\Kelas','id_kelas');
    }
    public function mapel()
        {
            return $this->belongsToMany(
                'App\Siswa',
                'mapel_siswa',
                'id_mapel',
                'id_siswa'
            );
        }
    }

