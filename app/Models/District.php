<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
   
    protected $table = 'districts';
    protected $fillable= ['name'];
    use hasFactory;
    public function studentApps()
    {
        return $this->hasMany(StudentApp::class);
    }
   
  
   
   
}
