<?php
namespace App\Repositories\Post;


interface PostRepositoryInterface
{
    public function getAll();

    public function getById($id);

    public function createData($data);

    public function updateData($id, $data);

    public function deleteData($data);


}
