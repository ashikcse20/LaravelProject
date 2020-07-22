<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $guarded = [ ];
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function setPasswordAttribute($password) //Mutator
    // { 
    //     $this->attributes['password'] = bcrypt($password);
    // }

    // public function getNameAttribute($name) //Accessor
    // {
    //     # code...
    //     return 'My name is '. ucfirst($name);
    // }

    public static  function uploadAvatar($imagefield)
    {
            $filename = $imagefield->getClientOriginalName();
             //User::deleteOldImage(); // When deleteOldImage Static
            (new self)-> deleteOldImage();
            //$request->imagefield->store('images', 'public');
            $imagefield->storeAs('images', $filename, 'public'); 

            //$id = $this::user()->id;
            $id=Auth::user()->id;
            //User::where('id',$id)->update(['avatar'=>$filename]); 
            //auth()->user()->update(['avatar' => $filename]);// Don't work
            //$this::where('id', $id)->update(['avatar' => $filename]);// Don't work
            (new self)->where('id', $id)->update(['avatar' => $filename]); 
    }
    protected /*static*/ function deleteOldImage()
    {
        // Storage::delete('/public/images/'.Auth::user()->avatar);
        Storage::delete('/public/images/'.auth()->user()->avatar);
    }
}
