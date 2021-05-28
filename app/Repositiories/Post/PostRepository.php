<?php
namespace App\Repository\Post;


use App\Models\Post\Post;


class PostRepository implements PostRepositoryInterface
{

    public function getAll()
    {
        return Post::all();
    }

    public function getById($id)
    {
        return Post::where('id',$id);
    }

    public function createData($data)
    {
        // TODO: Implement createData() method.

        $formattedData = [
            'name' => $data['name'],
            'description' => $data['description'],
            'category' => $data['category'],
            'cover-image'=> $data['image']
        ];

        return Post::create($formattedData);
    }

    public function updateData($id, $data)
    {
        // TODO: Implement updateData() method.
    }

    public function deleteData($data)
    {
        // TODO: Implement deleteData() method.
    }
}
