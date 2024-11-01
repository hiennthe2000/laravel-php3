@section('content')
    @if(session('message'))
        <h1>{{session('massage')}}</h1>
    @endif
    @include('client.components.slider')

        <div id="fh5co-services" class="fh5co-bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Danh mục sản phẩm</h2>
                </div>
                @foreach($product as $item)
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<img src="{{asset('storage/'.$item->image)}}" alt="" style="width: 100%;height: 100%; border-radius: 50%">
						</span>
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->contents}}</p>
                        <p><a href="{{route('details_Product3',$item->id)}}" class="btn btn-primary btn-outline">Xem</a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

        <div id="fh5co-product">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Sản phẩm</h2>
                        <p>Chúng có nhiều kiểu dáng, kích thước và màu sắc khác nhau để phù hợp với phong cách nội thất và sở thích cá nhân.</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($product2 as $item)
                    <div class="col-md-4 text-center animate-box">
                        <div class="product">
                            <div class="product-grid" style="background-image:url({{asset('storage/'.$item->image)}});">
                                <div class="inner">
                                    <p>
                                    <form action="{{ route('cart.add', ['product_id' => $item->id, 'quantity' => 1]) }}" method="POST">
                                        @csrf

                                            <button type="submit" class="btn btn-primary btn-sm mt-3"><i class="icon-shopping-cart"></i></button>

                                    </form>
                                        <a href="{{route('details_Product2',$item->id)}}" class="icon"></a>
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

        <div id="fh5co-testimonial" class="fh5co-bg-section">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <span>Testimony</span>
                        <h2>Happy Clients</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row animate-box">
                            <div class="owl-carousel owl-carousel-fullwidth">
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="{{asset('assets/images/person1.jpg')}}" alt="user">
                                        </figure>
                                        <span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="{{asset('assets/images/person2.jpg')}}" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="{{asset('assets/images/person3.jpg')}}" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url({{asset('assets/images/img_bg_5.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
								<span class="icon">
									<i class="icon-eye"></i>
								</span>

                                    <span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">NHIÊN LIỆU SÁNG TẠO</span>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
								<span class="icon">
									<i class="icon-shopping-cart"></i>
								</span>

                                    <span class="counter js-counter" data-from="0" data-to="450" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">KHÁCH HÀNG</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
								<span class="icon">
									<i class="icon-shop"></i>
								</span>
                                    <span class="counter js-counter" data-from="0" data-to="700" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">TẤT CẢ SẢN PHẨM</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
								<span class="icon">
									<i class="icon-clock"></i>
								</span>

                                    <span class="counter js-counter" data-from="0" data-to="5605" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">GIỜ ĐÃ DÙNG</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
@extends('client.layouts.master')
