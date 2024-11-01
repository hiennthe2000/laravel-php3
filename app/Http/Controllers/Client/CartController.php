<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\Checkout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Orders;
use App\Models\Product;
use App\Models\orderDetails;
use App\Http\Requests\CheckoutRequest;


class CartController extends Controller
{

    private function updateTotalCartCount()
    {
        $cartCount = Cart::count();
        session(['cartCount' => $cartCount]);
    }

    public function Cart()
    {
        $cartCount = Cart::sum('quantity');

        $cartItems = Cart::with('product')->get();

        $totalAmount = 0;

        foreach ($cartItems as $cartItem) {
            // Tính tổng số tiền cho từng mục và cộng vào tổng số tiền
            $totalAmount += $cartItem->quantity * $cartItem->product->price;
        }

        $this->updateTotalCartCount();

        return view('client.modules.products.carts.cart', compact('cartCount', 'cartItems', 'totalAmount'));

    }

public function countCart(){
    $data = Cart::all(); // Lấy dữ liệu sản phẩm từ database
    $totalProducts = $data->count(); // Đếm số lượng sản phẩm

    return view('client.components.header', compact('data', 'totalProducts'));
}
    public function getMail(CheckoutRequest $request){
        $userData = [
            'customer_name' => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'customer_email' => $request->customer_email,
            'shipping_address' => $request->shipping_address,
            'note' => $request->note,
        ];

        Orders::create($userData)->id;

        $cartItems = Cart::all();

        Mail::to($request->customer_email)->send(new Checkout($cartItems, $userData));

        Cart::clearCart();

        // Lấy thông tin sản phẩm từ bảng products
        $products = Product::find($productsID);

// Lấy thông tin đơn hàng từ bảng orders
        $orders = Orders::all();

        $cartCount = Cart::sum('quantity');

        $cartItems = Cart::with('product')->get();

        $totalAmount = 0;

        foreach ($cartItems as $cartItem) {
            // Tính tổng số tiền cho từng mục và cộng vào tổng số tiền
            $totalAmount += $cartItem->quantity * $cartItem->product->price;
        }

// Tạo order detail mới
        $orderDetail = new orderDetails([
            'product_id' => $products->id,
            'order_id' => $orders->id,
            'qty' => $totalAmount,
            'price' =>  $products->price,
            // ... gán các thông tin khác của order detail ...
        ]);

// Lưu order detail vào database
        $orderDetail->save();

        return redirect()->route('client.index');
    }


    public function addToCart($product_id, $quantity)
    {
        // Kiểm tra sản phẩm đã tồn tại trong giỏ hàng chưa
        $existingCartItem = Cart::where('product_id', $product_id)->first();

        if ($existingCartItem) {
            $existingCartItem->quantity += $quantity;
            $existingCartItem->save();
        } else {
            Cart::create([
                'product_id' => $product_id,
                'quantity' => $quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }


    public function updateCartItem(Request $request, $id)
    {
        $newQuantity = $request->input('quantity');

        $cartItem = Cart::findOrFail($id);
        $cartItem->quantity = $newQuantity;
        $cartItem->save();

        return redirect()->back();
    }

    public function removeCartItem($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        return redirect()->back();
    }
}
