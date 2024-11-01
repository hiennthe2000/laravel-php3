@section('content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url({{asset('assets/images/img_bg_2.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
                            <h1>Danh mục bài viết</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="fh5co-services" class="fh5co-bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Danh mục bài viết</h2>
                </div>
                @foreach($posts as $item)
                    <div class="col-md-4 col-sm-4 text-center">
                        <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<img src="{{asset('storage/'.$item->image)}}" alt="" style="width: 100%;height: 100%; border-radius: 50%">
						</span>
                            <h3>{{$item->name}}</h3>
                            <p>{{$item->summary}}</p>
                            <p><a href="{{route('Category_Product',$item->id)}}" class="btn btn-primary btn-outline">Xem</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
@extends('client.layouts.master')
