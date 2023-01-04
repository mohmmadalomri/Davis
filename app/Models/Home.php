<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table="homes";
    protected $fillable=['image','name','description','facbook','twitter'
    ,'gethub','user_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
