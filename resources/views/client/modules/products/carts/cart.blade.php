@section('content')
    <section class="h-100 h-custom" style="background-color: #d2c9ff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Đơn hàng của bạn</h1>
                                            <h6 class="mb-0 text-muted">{{ $cartCount }} Sản phẩm</h6>
                                        </div>
                                        <hr class="my-4">

                                        @foreach ($cartItems as $cartItem)
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="{{asset('/storage/'. $cartItem->product->image) }}" class="img-fluid rounded-2" alt="{{ $cartItem->product->name }}">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted">{{ $cartItem->product->category }}</h6>
                                                    <h6 class="text-black mb-0">{{ $cartItem->product->name }}</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 mt-4">
                                                    <form action="{{ route('cart.update', ['id' => $cartItem->id]) }}" method="post" class="d-flex justify-content-between">
                                                        @csrf
                                                        <input id="form1" min="0" name="quantity" value="{{ $cartItem->quantity }}" type="number" style="height: 40px" class="form-control form-control-sm"/>
                                                        <button class="btn btn-success btn-sm" type="submit" style="height: 40px">Lưu</button>
                                                    </form>

                                                </div>

                                                <div class="col-md-3 col-lg-2 col-xl-3 offset-lg-1">
                                                    <h6 class="mb-0">{{ $cartItem->product->price }} VNĐ</h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="{{ route('cart.remove', ['id' => $cartItem->id]) }}" class="btn btn-danger" style="height: 40px" >Xóa</a>
                                                </div>
                                            </div>
                                            <hr class="my-4">
                                        @endforeach

                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="{{ route('client.index') }}" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Quay lại trang sản phẩm</a></h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Thông tin</h3>
                                        <hr class="my-4">
                                        <form action="{{ route('mail') }}" method="POST">
                                            @csrf
                                            <h6 class="text-uppercase">Tên khách hàng:</h6>
                                            <div class="mb-1">
                                                <div class="form-outline">
                                                    <input type="text" id="customer_name" name="customer_name" class="form-control form-control-lg @error('customer_name') is-invalid @enderror" />
                                                    @error('customer_name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <h6 class="text-uppercase">Số điện thoại:</h6>
                                            <div class="mb-1">
                                                <div class="form-outline">
                                                    <input type="text" id="customer_phone" name="customer_phone" class="form-control form-control-lg @error('customer_phone') is-invalid @enderror" />
                                                    @error('customer_phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase">Email:</h6>
                                            <div class="mb-1">
                                                <div class="form-outline">
                                                    <input type="email" id="customer_email" name="customer_email" class="form-control form-control-lg @error('customer_email') is-invalid @enderror" />
                                                    @error('customer_email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <h6 class="text-uppercase">Địa chỉ giao hàng:</h6>
                                            <div class="mb-1">
                                                <div class="form-outline">
                                                    <input type="text" id="shipping_address" name="shipping_address" class="form-control form-control-lg @error('shipping_address') is-invalid @enderror" />
                                                    @error('shipping_address')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <h6 class="text-uppercase">Ghi chú:</h6>
                                            <div class="mb-1">
                                                <div class="form-outline">
                                                    <textarea class="form-control form-control-lg" name="note" id="note" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                            <div class="d-flex justify-content-between mb-5">
                                                <h5 class="text-uppercase">Tổng tiền</h5>
                                                <h5>{{$totalAmount}} đ</h5>
                                            </div>

                                            <button type="submit" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Đặt hàng</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@extends('client.layouts.master')
