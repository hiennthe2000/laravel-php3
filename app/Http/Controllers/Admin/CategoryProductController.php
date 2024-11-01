<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\CategoryProduct;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CategoryProductRequest;

class CategoryProductController extends Controller
{
    public function addCategoryProduct()
    {
        return view('admin.modules.products.category.addCategoryProduct');
    }

    public function storeCategoryProduct(CategoryProductRequest $request)
    {

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('uploads', $imageName, 'public');
        }

        CategoryProduct::create([
            'name' => $request->name,
            'contents' => $request->contents,
            'image' => $imagePath,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);

        return redirect()->route('listCategoryProduct');
    }

    public function listCategoryProduct()
    {
        $categories = CategoryProduct::all();

        return view('admin.modules.products.category.listCategoryProduct', ['product' => $categories]);
    }

    public function editCategoryProduct($id)
    {
        $category = CategoryProduct::find($id);

        if (!$category) {
            abort(404);
        }

        return view('admin.modules.products.category.editCategoryProduct', ['edit' => $category]);
    }
    public function updateCategoryProduct(CategoryProductRequest $request, $id)
    {
        $category = CategoryProduct::find($id);

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
        $category->contents = $request->contents;
        $category->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $category->save();

        return redirect()->route('listCategoryProduct');
    }

    public function deleteCategoryProduct($id)
    {
        $category = CategoryProduct::find($id);

        if (!$category) {
            abort(404);
        }

        if ($category->image) {
            Storage::delete('public/' . $category->image);
        }

        $category->delete();

        return redirect()->route('listCategoryProduct');
    }
}
