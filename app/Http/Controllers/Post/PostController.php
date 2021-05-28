<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Request\Post\PostCreateRequest;
use App\Repositories\Post\PostRepositoryInterface;


class PostController extends Controller
{

    private $repository;

    public function __construct(PostRepositoryInterface $repository)
    {
        $this->repository=$repository;
    }




    public function showIndex(){
        return view('posts.index');
    }

    public function showCreateForm(){
        return view('posts.create');
    }

    public function handleCreate(PostCreateRequest $request){
/**
        $post = $this->repository->createData($request->validated());

        dd($post);
*/

    }

}
