<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;
    use sluggable;

    protected $fillable =[
        'name', 'slug'
    ];

    public function sluggable(): array{
        return[
            'slug' => [
                'source' => 'name'
            ]
            ];
    }
=======
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
>>>>>>> 8677526cd426ffce45cd3ac5b0174d4914a20555
}
