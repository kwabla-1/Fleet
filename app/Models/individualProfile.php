<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class individualProfile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'date_of_birth',
        'email' ,
        'firstname',
        'lastname',
        'homeaddres',
        'city',
        'country',
        'location',
        'about_me',
        'professsion',
        'experince_level',
        'school_name',
        'carrer_commence',
        'completion_year',
        'languages',
        'mobile_number',
        'experince_level',
        'fleet_id',
        'profile_picture',
        'certificates',
        'address',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }


}
