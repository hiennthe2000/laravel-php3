<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use App\Models\CategoryPost;
use App\Http\Requests\CategoryPostRequest;


class CategoryPostController extends Controller
{

    public function newPost()
    {
        $categories = CategoryPost::all();

        return view('admin.modules.posts.category.listCategory', ['posts' => $categories]);
    }

    public function addCategory()
    {
        return view('admin.modules.posts.category.addCategory');
    }

    public function storeCategory(CategoryPostRequest $request)
    {


        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('uploads', $imageName, 'public');
        }

        CategoryPost::create([
            'name' => $request->name,
            'summary' => $request->summary,
            'image' => $imagePath,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);

        return redirect()->route('ListNewPost');
    }

    public function editCategory($id)
    {
        $category = CategoryPost::find($id);

        if (!$category) {
            abort(404);
        }

        return view('admin.modules.posts.category.editCategory', ['edit' => $category]);
    }

    public function updateCategory(CategoryPostRequest $request, $id)
    {


        $category = CategoryPost::find($id);

        if (!$category) {
            abort(404);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('uploads', $imageName, 'public');

            Storage::delete('public/' . $category->image);

            $category->image = $imagePath;
        }

        $category->name = $request->name;
        $category->summary = $request->summary;
        $category->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $category->save();

        return redirect()->route('ListNewPost');
    }

    public function deletecategory($id)
    {
        $category = CategoryPost::find($id);

        if (!$category) {
            abort(404);
        }

        if ($category->image) {
            Storage::delete('public/' . $category->image);
        }

        $category->delete();

        return redirect()->route('ListNewPost');
    }

}
