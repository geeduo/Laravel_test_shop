<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts', compact('posts'));
    }

    public function create()
    {
        $postsArr = [
            [
                'title'=> 'post 3',
                'content'=> 'asdxvx fghert xxxxxxxxxx',
                'likes'=> 21,
                'is_published'=> 1,
                'image'=> 'asddfdg.rte',
            ],
            [
                'title'=> 'post 4',
                'content'=> 'another asdxvx fghert xxxxxxxxxx',
                'likes'=> 20,
                'is_published'=> 1,
                'image'=> 'xxxasddfdg.rte',
            ],
        ];

        foreach($postsArr as $item)
        {
            Post::create($item);
        }

    }

    public function update()
    {
        $post = Post::find(5);

        $post->update([
            'title'=> 'uppost 5',
            'content'=> 'upanother asdxvx fghert xxxxxxxxxx',
            'likes'=> 20,
            'is_published'=> 1,
            'image'=> 'upxxxasddfdg.rte',
        ]);
    }

    public function delete()
    {
        $post = Post::find(5);
        $post->delete();
    }

    public function firstOrCreate()
    {

        $anotherPost = Post::firstOrCreate([
            'title'=> 'lorem11'],[
            'title'=> 'lorem11',
            'content'=> 'ppupanother asdxvx fghert xxxxxxxxxx',
            'likes'=> 200,
            'is_published'=> 1,
            'image'=> 'ppupxxxasddfdg.rte',
        ]);

        dump($anotherPost->title);
        dd('create');
    }

    public function updateOrCreate()
    {
        $anotherPost = Post::updateOrCreate([
            'title'=> 'lorem12'],[
            'title'=> 'lorem12',
            'content'=> '111',
            'likes'=> 200,
            'is_published'=> 1,
            'image'=> 'ppupxxxasddfdg.rte',
        ]);

        dump($anotherPost->title);
        dd('create');
    }
}
