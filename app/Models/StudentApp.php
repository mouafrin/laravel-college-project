<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 class StudentApp extends Model
 

 {
    protected $table = 'student_apps';

    public function districtName()
    {
        return $this->belongsTo(District::class);
    }


     public function thanaName()
  {
    return $this->belongsTo(Thana::class);
  }

 }

