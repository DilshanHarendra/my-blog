@extends('Layout')
@section('content')

    <div class="container mt-5  mx-auto">
        <h1 class="text-3xl text-center mb-3">Create Posts</h1>


        <div class="w-2/4 mx-auto mb-3 bg-gray-50 shadow border p-5">
            <form action="" method="post">
                @csrf
                <label  class="block mt-3 font-semobold" for="title">Title</label>
                <input type="text" name="title" id="title" class="w-full border py-1 border-blue-500"  />

                <label  class="block mt-3 font-semobold" for="image">Image</label>
                <input type="text" name="image" id="image" class="w-full border py-1 border-blue-500"  />

                <label  class="block mt-3 font-semobold" for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="w-full border py-1 border-blue-500"></textarea>

                <label  class="block mt-3 font-semobold" for="category">Category</label>
                <select  name="category" id="category" class="w-full border py-1 border-blue-500">
                    <option value="sport">sport</option>
                    <option value="political">political</option>
                    <option value="education">education</option>
                    <option value="health">health</option>
                </select>


                <button class="mt-5 bg-blue-500 text-white w-full py-2">Save</button>
            </form>
        </div>


    </div>

@endsection

