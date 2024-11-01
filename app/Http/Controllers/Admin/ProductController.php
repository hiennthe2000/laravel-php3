<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
class ProductController extends Controller
{
    public function addProduct()
    {
        $data = CategoryProduct::select('id', 'name')->get();
        return view('admin.modules.products.product.addProduct', ['product' => $data]);
    }

    public function addProductStore(ProductRequest $request)
    {

        // Xử lý hình ảnh
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('uploads', $imageName, 'public');
        } else {
            $imagePath = null;
        }

        $slugPost = Str::of($request->slug)->slug('-');
        $product = new Product([
            'name' => $request->name,
            'slug' => $slugPost,
            'contents' => $request->contents,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);

        $product->save();

        return redirect()->route('listProduct');
    }

    public function listProduct()
    {
        $data = Product::all();
        return view('admin.modules.products.product.listProduct', ['product2' => $data]);
    }

    public function editProduct($id)
    {
        $query = Product::select('products.id', 'products.name', 'products.slug', 'products.image', 'products.contents', 'products.category_id','products.price','products.sale_price', 'products.created_at', 'products.updated_at', 'product_categories.name AS category_name')
            ->leftJoin('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->where('products.id', $id)
            ->first();


        $data = CategoryProduct::select('id', 'name')->get();

        return view('admin.modules.products.product.editProduct', ['edit' => $query, 'edit2' => $data]);
    }

    public function updateProduct(ProductRequest $request, $id)
    {
        $query = Product::find($id);

        if (!$query) {
            return redirect()->route('listProduct')->with('error', 'Sản phẩm không tồn tại.');
        }

        

        // Xử lý hình ảnh
        if ($request->hasFile('image')) {
            // Lưu ảnh mới
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('uploads', $imageName, 'public');

            // Xóa ảnh cũ
            Storage::delete('public/' . $query->image);

            $query->image = $imagePath;
        }

        $query->name = $request->name;
        $query->slug = Str::of($request->slug)->slug('-');
        $query->contents = $request->contents;
        $query->price = $request->price;
        $query->sale_price = $request->sale_price;
        $query->category_id = $request->category_id;
        $query->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $query->save();

        return redirect()->route('listProduct')->with('success', 'Cập nhật sản phẩm thành công.');
    }

    public function deleteProduct($id)
    {
        $query = Product::find($id);

        if (!$query) {
            return redirect()->route('listProduct')->with('error', 'Sản phẩm không tồn tại.');
        }

        // Xóa ảnh nếu có
        if ($query->image) {
            Storage::delete('public/' . $query->image);
        }

        $query->delete();

        return redirect()->route('listProduct')->with('success', 'Xóa sản phẩm thành công.');
    }

}
