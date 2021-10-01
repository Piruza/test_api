<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements JWTSubject{

    use HasFactory, Notifiable;


    protected $redirectTo = '/';


    protected $guarded = [];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    
    public function getJWTIdentifier(){

        return $this->getKey();

    }



    public function getJWTCustomClaims(){

        return [];

    }

    public function showUserDetails(){
        return [
            'id' => $this->id,
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'gender' => $this->gender,
        ];
    }
}


