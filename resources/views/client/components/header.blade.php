<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-2">
                <div id="fh5co-logo"><a href="{{route('client.index')}}">Furniture.</a></div>
            </div>
            <div class="col-md-6 col-xs-6 text-center menu-1">
                <ul>
                    <li class="has-dropdown"><a href="{{route('client.index')}}">Trang chủ</a></li>
                    <li class="has-dropdown"><a href="{{route('about_page')}}">Giới thiệu</a></li>
                    <li><a href="{{route('product_page')}}">Sản phẩm</a></li>
                    <li class="has-dropdown"><a href="{{route('post_page')}}">Bài viết</a></li>
                    <li><a href="{{route('contact_page')}}">Liên hệ</a></li>
                </ul>
            </div>

            <ul style="width: 20%">
                @guest
                <li>
                    <a href="{{route('login')}}" style="font-size: 15px; line-height: 1.5;color: #828282;">Đăng nhập</a>
                    <a href="{{route('register')}}" style="font-size: 15px; line-height: 1.5;color: #828282;">Đăng ký</a>
                </li>
                @else
                <li class="has-dropdown">
                    <a href="#" style="text-transform: unset; font-size: 17px">{{ Auth::user()->name }}</a>
                    <ul class="dropdown">
                        <li><a href="{{route('profile.edit')}}">{{ __('Cập nhật') }}</a></li>
                        <li><a href="#">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="{{route('logout')}}"
                                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>
                                </form>
                            </a></li>
                    </ul>
                </li>
                @endguest
                    <li class="shopping-cart"><a href="{{route('cart')}}" class="cart"><span>
                                @if(session('cartCount'))
                                <small>{{session('cartCount')}}</small>
                                @endif
                                <i class="icon-shopping-cart"></i></span></a></li>
            </ul>
        </div>
    </div>

</nav>


