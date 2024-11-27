<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'name',
        'certificate',
        'thumbnail',
        'type',
        'status',
        'price',
        'level',
        'description',
        'mentor_id'
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class)->orderBy('id', 'ASC');
    }

    public function images()
    {
        return $this->hasMany(ImageCourse::class)->orderBy('id','ASC');
    }
}
