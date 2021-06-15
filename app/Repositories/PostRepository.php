<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Contracts\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface{

    protected $entity;

    public function __construct(Post $post)
    {
        $this->entity = $post;
    }

    public function findAll()
    {
        return $this->entity->all();
    }

}
