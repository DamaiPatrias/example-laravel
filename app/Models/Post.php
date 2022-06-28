<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = ['title', 'category_id', 'slug', 'excerpt', 'body'];
    //variable yang ditulis boleh diisi
    protected $guarded = ['id'];
    //variable yang ditulis tidak boleh diisi

    protected $with = ['author', 'category'];

    public function scopeFilter($query, array $fillters)
    {
        // if (isset($fillters['search']) ? $fillters['search'] : false) {
        //     return $query->where('title', 'LIKE', '%' . $fillters('search') . '%')
        //         ->orWhere('body', 'LIKE', '%' . $fillters('search') . '%');
        // }

        $query->when($fillters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('body', 'LIKE', '%' . $search . '%');
        });

        $query->when($fillters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when(
            $fillters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'author',
                fn ($query) =>
                $query->where('name', $author)
            )
        );

        // $query->when($fillters['author'] ?? false, function ($query, $author) {
        //     return $query->whereHas('author', function ($query) use ($author) {
        //         $query->where('username', $author);
        //     });
        // });
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
