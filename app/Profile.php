<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function profileImage()
    {
        $imagePath= ($this->image) ?  $this->image: '/profile/zfonuxhrBKDyr08o9emkaSqT81MUoBKvvMWhpkTO.jpeg';
        return '/storage/' . $imagePath ;
    }

    public function followers()
{
    return $this->belongsTOMany(User::class);
}
public function user()
{
    return $this->belongsTO(User::class);
}
}
