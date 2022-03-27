<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ranking extends Model
{
    use HasFactory;

    protected $table = 'personal_record';
    
    public static function getRanking(int $movementId)
    {
        return DB::table('personal_record as pr')
            ->select('m.name as movementName', 'u.name as userName', 'u.id as userId', 'pr.value as record', 'pr.date')
            ->join('users as u', 'pr.user_id', '=', 'u.id')
            ->join('movements as m', 'pr.movement_id', '=', 'm.id')
            ->where('movement_id', $movementId)
            ->orderBy('pr.value', 'desc')
            ->get()->toArray();
    }
}
