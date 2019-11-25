<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

// Build controller
class PostController extends Controller
{
    public function getIndex(Store $session)
    {
        $post = new Post();
        //Render data from Controller
        $posts = $posts->getPosts($session);
        return view('teams.index', ['posts' => $posts]);
    }
}
