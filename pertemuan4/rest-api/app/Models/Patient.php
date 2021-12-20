<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Patient extends Model
{
    use HasFactory;

    static function getAllpatient() {
        // query select SQL
        $patient = DB::select('select * from patient');
        return $patient;
    }
}
