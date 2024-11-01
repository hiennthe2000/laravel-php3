<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product as ProductResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $arr = [
            'status' => true,
            'message' => 'Danh sách sản phẩm',
            'data' =>ProductResource::collection($products)
        ];

        return response()->json($arr, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'slug' => 'required',
            'contents' => 'required',
            'image' => 'required',
            'price' => 'numeric',
            'sale_price' => 'numeric',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra lại dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 400);
        }

        $product = Product::create($input);
        $arr = [
            'status' => true,
            'message' => "Sản phẩm đã được lưu thành công",
            'data' => new ProductResource($product)
        ];
        return response()->json($arr, 200);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            $arr = [
                'success' => false,
                'message' => 'Sản phẩm không tồn tại',
                'data' => [],
            ];
            return response()->json($arr, 400);
        }
        $arr = [
            'status' => true,
            'message' => "Chi tiết sản phẩm",
            'data' => new ProductResource($product)
        ];
        return response()->json($arr, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'slug' => 'required',
            'contents' => 'required',
            'image' => 'required',
            'price' => 'numeric',
            'sale_price' => 'numeric',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra lại dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }

        $product->name = $input['name'];
        $product->slug = $input['slug'];
        $product->contents = $input['contents'];
        $product->image = $input['image'];
        $product->price = $input['price'];
        $product->sale_price = $input['sale_price'];
        $product->category_id = $input['category_id'];
        $product->save();
        $arr = [
            'status' => true,
            'message' => "Sản phẩm đã được lưu thành công",
            'data' => new ProductResource($product)
        ];

        return response()->json($arr, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        $arr = [
            'success' => true,
            'message' => 'Sản phẩm đã được xóa',
            'data' => [],
        ];
        return response()->json($arr, 201);

    }
}
