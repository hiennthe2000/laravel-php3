@section('content')
    @foreach($product2 as $item)
        <section class="content">
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="col-12">
                                <img src="{{asset('storage/'.$item->image)}}" class="product-image" alt="Product Image">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h3 class="my-3">{{$item->name}}</h3>
                            <p>{{$item->contents}}</p>

                            <hr>
                            <div class="bg-gray py-2 px-3 mt-4">
                                <h2 class="mb-0">
                                    {{$item->sale_price}}đ
                                </h2>
                                <h4 class="mt-0">
                                    <small>Giá gốc: {{$item->price}}đ</small>
                                </h4>
                            </div>

                            <div class="mt-4">
                                <div class="btn btn-primary btn-lg btn-flat">
                                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                    Thêm vào giỏ
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
    @endforeach
@endsection
@extends('admin.layouts.master')
