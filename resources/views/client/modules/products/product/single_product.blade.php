
@section('content')

    @foreach($product as $item)
        <div id="fh5co-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="active text-center">
                            <figure>
                                <img src="{{asset('storage/'.$item->image)}}" alt="user" style="width: 600px;">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="col-md-10 col-md-offset-1" style="margin-left: 10%">
                            <div class="fh5co-tabs animate-box">
                                <div class="fh5co-tab-content-wrap">

                                    <div class="fh5co-tab-content tab-content active" data-tab-content="1">
                                        <div class="col-md-10 col-md-offset-1">
                                            <h2>{{$item->name}}</h2>
                                            <span class="price">Giá: {{$item->sale_price}}đ</span>
                                            <span class="price">Giá gốc: <del>{{$item->price}}đ</del></span>
                                            <p>{{$item->contents}}</p>
                                            <div class="row animate-box">
                                                <div class="col-md-8 fh5co-heading">
                                                    <form action="{{ route('cart.add', ['product_id' => $item->id, 'quantity' => 1]) }}" method="POST">
                                                        @csrf
                                                    <p>
                                                        <button type="submit" class="btn btn-primary btn-sm mt-3">Thêm vào giỏ hàng</button>
                                                    </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    @endforeach
@endsection
@extends('client.layouts.master')
