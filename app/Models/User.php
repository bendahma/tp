<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
   use HasApiTokens, HasFactory, Notifiable, HasRoles;

   protected $fillable = [ 'name', 'email', 'username' ,'password', 'image_url', 'suspended','lastLoggedIn' ];

   protected $hidden = [ 'password', 'remember_token', ];

   protected $casts = [ 'email_verified_at' => 'datetime', 'lastLoggedIn' => 'datetime' ];

   public static function search($search){
      if(empty($search)) { return static::query(); }
      else { return static::query()->where('name', 'like','%'.$search.'%'); }
   }

   public static function filter($columnName,$columnValue){
         // dd($columnName . ' ' . $columnValue);
       return static::query()->where($columnName, 'like','%'.$columnValue.'%'); 
   }

   public function suspend(){
      $this->suspended = !$this->suspended ;
      $this->save();
   }
}
