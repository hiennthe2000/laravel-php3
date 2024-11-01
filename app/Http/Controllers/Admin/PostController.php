<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\Post;
use App\Models\CategoryPost;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function addPost()
    {
        $categories = CategoryPost::select('id', 'name')->get();

        return view('admin.modules.posts.post.addPost', ['hien' => $categories]);
    }

    public function addPostStore(PostRequest $request)
    {

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('uploads', $imageName, 'public');
        }

        $slugPost = Str::of($request->slug)->slug('-');

        Post::create([
            'name' => $request->name,
            'slug' => $slugPost,
            'contents' => $request->contents,
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'created_at' => now(),
        ]);

        return redirect()->route('listPost');
    }

    public function listPost()
    {
        $posts = Post::all();

        return view('admin.modules.posts.post.listPost', ['posts' => $posts]);
    }

    public function editPosts($id)
    {
        $post = Post::select('posts.id', 'posts.name', 'posts.slug', 'posts.image', 'posts.contents', 'posts.category_id', 'posts.created_at', 'posts.updated_at', 'categories.name AS category_name')
            ->leftJoin('categories', 'posts.category_id', '=', 'categories.id')
            ->where('posts.id', $id)
            ->first();

        $categories = CategoryPost::select('id', 'name')->get();

        return view('admin.modules.posts.post.editPost', ['edit' => $post, 'edit2' => $categories]);
    }

    public function updatePosts(PostRequest $request, $id)
    {

        $post = Post::find($id);

        if (!$post) {
            abort(404);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('uploads', $imageName, 'public');

            Storage::delete('public/' . $post->image);

            $post->image = $imagePath;
        }

        $slugPost = Str::of($request->slug)->slug('-');

        $post->name = $request->name;
        $post->slug = $slugPost;
        $post->contents = $request->contents;
        $post->category_id = $request->category_id;
        $post->updated_at = now();
        $post->save();

        return redirect()->route('listPost');
    }

    public function deletePost($id)
    {
        $post = Post::find($id);

        if (!$post) {
            abort(404);
        }

        if ($post->image) {
            Storage::delete('public/' . $post->image);
        }

        $post->delete();

        return redirect()->route('listPost');
    }
}
