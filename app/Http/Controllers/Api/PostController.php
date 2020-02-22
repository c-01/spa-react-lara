<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function create(Request $request)
    {
        $post = new Post;

        $post->title = 'This is title';
        $post->content = 'This is content';
        $post->options = json_encode([
            'tags' => 'PHP, JavaScript, Node',
            'author' => 'Adam Stone',
            'like' => '100'
        ]);

        $post->save();
        return response()->json(['created']);
    }

    public function show($id)
    {
        $r = Post::findOrFail($id);
        dd($r->toArray());

        $op = json_decode($r->options);

        return $op->tags->uuid;
    }

    public function update($id)
    {

        Post::updateOrCreate([
            'id'=> $id,
            'options' => []
        ], [
            'title'=> 'Update or Create '.$id,
            'content' => 'content New UoC '. $id,
            'options' => $this->_apply([
                'like' => '90'
            ])
        ]);

//        $post = Post::find($id);
//        $post->title = 'title record '. $id;
//        $post->content = 'content '. $id;
//        $post->options = $this->_apply([
//            'tags' => [
//                'uuid' => [123, 456, 789],
//                'tag' => 'laravel, react, Vue'
//            ],
//            'author' => 'Adam Stone '.$id,
//            'like' => '100 '.$id
//        ]);
//
//        $post->save();

    }

    private function _apply(array $r)
    {
        return json_encode($r);
    }
}
