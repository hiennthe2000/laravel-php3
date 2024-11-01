@section('content')

    <div id="fh5co-product">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <span>Nội thất</span>
                    <h2>Sản phẩm trong danh mục.</h2>
                    <p>húng tôi buộc tội xứng đáng nhất với những điều khắc nghiệt nhất trong cuộc sống, nhưng chúng cung cấp cho toàn bộ chuyến bay rắc rối..</p>
                </div>
            </div>
            <div class="row">
                @foreach($category as $item)
                    <div class="col-md-4 text-center animate-box">
                        <div class="product">
                            <div class="product-grid" style="background-image:url({{asset('storage/'.$item->image)}});">
                                <div class="inner">
                                    <p>
                                        <a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
                                        <a href="" class="icon"><i class="icon-eye"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="">{{$item->name}}</a></h3>
                                <span class="price">{{$item->price}}đ</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@extends('client.layouts.master')
