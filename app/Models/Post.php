<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Post extends Model {
    protected $post = 'posts';
    public function getPublishedPosts()
    {
        $posts = Post::latest('created_at')
            ->published() // get function scopePublished
            ->get();
        return $posts;
    }
    public function scopePublished($query)
    {
        $query->where('created_at', '<=', Carbon::now())
            ->where('published', '=', 1);
    }
    public function scopeUnPublished($query)
    {
        $query->where('created_at', '<=', Carbon::now())
            ->where('published', '=', 0);
    }
    public function getUnPublishedPosts()
    {
        $posts = $this->latest('created_at')
            ->unPublished() // get function scopeUnPublished
            ->get();
        return $posts;
    }
    public function postSave($post)
    {
//        dd($post);
        $post->save();
    }
//    public function getNumber()
//    {
//        return 1000;
//    }
    public function getAllUsers()
    {
        $users = DB::table('users')->lists('name'); //Query bilder
        return $users;
    }
}