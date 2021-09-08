<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absener extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'att', 'class' ];

    public function List()
    {
        return $this->hasMany(ListAttendance::class, 'AbsenerID');
    }


}
