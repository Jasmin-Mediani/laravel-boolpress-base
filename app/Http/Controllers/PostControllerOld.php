<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index() {
        $posts = Post::all(); 
    
        
            foreach ($posts as $post) {
            return view('posts.index' , compact('posts'));
        } 
    }

    public function indexPublished() { //fa vedere solo i post pubblicati (dove il valore di 'published' nel db è 1)
        $posts = Post::where('published', 1)->get(); 
    
        
            foreach ($posts as $post) {
            return view('posts.index' , compact('posts'));
        } 
    }
}

