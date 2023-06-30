<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    protected $table = 'thanas';
    public function studentApps()
    {
        return $this->hasMany(StudentApp::class);
    }
   
}
