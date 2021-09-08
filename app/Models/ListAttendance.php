<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListAttendance extends Model
{
    use HasFactory;
    protected $fillable = ['audience', 'idUnique', 'AbsenerID' ];

    public function data()
    {
        return $this->belongsTo(Absener::class,'AbsenerID','id');
    }

}
