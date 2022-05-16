<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'projects';
    public $timestamps = false; //haalt de updated at weg

public function tasks(){
return $this->hasMany('\App\Models\Task', 'project_id');

}
public function owner(){
    return $this->belongsTo('\App\Models\User' , 'owner_id');

}

}
