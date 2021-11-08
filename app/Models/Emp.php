<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Emp extends Model
{
    use HasFactory;

    protected $table = 'emp';

    public function getAll()
    {
        return DB::select('SELECT * FROM emp');
        // return DB::select('SELECT * FROM ' .$this->table);
    }

    public function getEmpByName($n)
    {
        return DB::select('SELECT * FROM emp WHERE ename = ?', [$n]);
    }

    // public function getAllEmpInfos($a1, $a2)
    // {
    //     return DB::select('SELECT '.$a1.', '.$a2.' FROM emp');
    // }
}
