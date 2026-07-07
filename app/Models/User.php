<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static function generateWhatsAppMessage() {
        $c = "-----\nwww.jemeaproducts.com\n-----\nDate : ".date("F j, Y")."\nTime : ".date("H:i:s")."\n-----\n";
    foreach(\Cart::content() as $carted) {
        $c = $c . "".$carted->name . " : ". $carted->price ."f x ".$carted->qty." = ". $carted->price*$carted->qty."f\n";
    }
    $c = $c ."-----\nLogistics : 1500f\nTotal : ".\Cart::total()."f\n-----";

        return  "https://wa.me/237677090155?text=".urlencode($c);
    }
}
