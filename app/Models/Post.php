<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
class Post extends Model
{
    protected $fillable = ['slug', 'title', 'excerpt', 'content', 'published', 'published_at'];

    public function getPublishedPosts()
    {
        $posts = $this->latest('published_at')->published()->get();

        return $posts;
    }

    public function scopePublished($querey)
    {
        $querey->where('published_at', '<=', Carbon::now())
            ->where('published', '=', 1);
    }

    public function scopeUnPublished($querey)
    {
        $querey->where('published_at', '=>', Carbon::now())
            ->orwhere('published', '=', 0);
    }

    public function getUnPublishedPosts()
    {
        return $this->latest('published_at')->unPublished()->get();
    }
}
