<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    //table (plural )====>mystudents
    // protected $table='myStudents';
    // primaryKey ==> id  ==> myId
    // protected $primaryKey="myID";

    protected $fillable=['name','email','gender','image','address','age','track_id']; // permited data
    // protected $guarded=['token']; // forbidden
    // protected $timestamps=false;
    public $timestamps = false;
    // created_at
    // updated_at

    // student ===> belong to one track

    function track()
    {
        return $this->belongsTo(Track::class);
    }
}
