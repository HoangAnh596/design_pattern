<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function save($data)
    {
        $post = new $this->post;

        $post->title = $data['title'];
        $post->description = $data['description'];

        $post->save();

        return $post->fresh();
    }

    public function getAllPost()
    {
        return $this->post->get();
    }

    public function delete($id)
    {
        $post = $this->post->find($id); 
        $post->delete();

        return $post;
    }
}