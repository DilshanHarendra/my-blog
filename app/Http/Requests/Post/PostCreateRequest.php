<?php

namespace App\Http\Request\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'title' =>['required'],
            'image' => ['required'],
            'description' => ['required'],
            'category'=> ['required'],

        ];
    }

}

