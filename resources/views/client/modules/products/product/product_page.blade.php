@section('content')

    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url({{asset('assets/images/img_bg_2.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
                            <h1>Sản phẩm</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<div id="fh5co-product">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <span>Nội thất</span>
                <h2>Sản phẩm.</h2>
                <p>húng tôi buộc tội xứng đáng nhất với những điều khắc nghiệt nhất trong cuộc sống, nhưng chúng cung cấp cho toàn bộ chuyến bay rắc rối..</p>
            </div>
        </div>
        <div class="row">
            @foreach($product as $item)
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid" style="background-image:url({{asset('storage/'.$item->image)}});">
                        <div class="inner">
                            <p>
                                <a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
                                <a href="{{route('details_Product2',$item->id)}}" class="icon"><i class="icon-eye"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="{{route('details_Product2',$item->id)}}">{{$item->name}}</a></h3>
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
