<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = 'pictures';
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setGalleryAttribute($gallery)
    {
        if (is_array($gallery)) {
            $this->attributes['gallery'] = json_encode($gallery);
        }
    }

    public function getGalleryAttribute($gallery)
    {
        return json_decode($gallery, true);
    }
}
