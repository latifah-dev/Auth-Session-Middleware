<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class users extends Model
{
    public $guarded = ["id"];
    use HasFactory;
    protected $table = 'users';

    public static function boot() {
        parent::boot();
        static::creating(function(Users $pengguna) {
            $pengguna->password = Hash::make($pengguna->password);
        });
        static::updating(function(Users $pengguna) {
            if($pengguna->isDirty(["password"])) {
                $pengguna->password = Hash::make($pengguna->password);
            }
        });
    }

}
