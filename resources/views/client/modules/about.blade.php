@section('content')

    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url({{asset('assets/images/img_bg_2.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
                            <h1>Giới thiệu</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<div id="fh5co-about">
    <div class="container">
        <div class="about-content">
            <div class="row animate-box">
                <div class="col-md-6">
                    <div class="desc">
                        <h3>Lịch sử công ty</h3>
                        <p>Bản thân công ty là một công ty rất thành công. Để trở thành con người của mình, anh ta chống trả với rất nhiều khả năng phục hồi, và theo nhiều cách. Có phải những thứ hiện tại không bao giờ dễ dàng để giải quyết?</p>
                        <p>Mà bởi vì họ thấy trước hậu quả của việc phạm tội với những thú vui thuận tiện nhất, nó đẩy lùi họ và họ nhanh chóng bị từ chối. Vì vậy, chúng ta có thể nhận ra rằng họ không biết nỗi đau phải gánh chịu sẽ khiến anh ta phải nỗ lực ít nhất..</p>
                    </div>
                    <div class="desc">
                        <h3>Sứ mệnh & Tầm nhìn</h3>
                        <p>Bản thân công ty là một công ty rất thành công. Để trở thành con người của mình, anh ta chống trả với rất nhiều khả năng phục hồi, và theo nhiều cách. Có phải những thứ hiện tại không bao giờ dễ dàng để giải quyết?</p>
                        <p>Mà bởi vì họ thấy trước hậu quả của việc phạm tội với những thú vui thuận tiện nhất, nó đẩy lùi họ và họ nhanh chóng bị từ chối. Vì vậy, chúng ta có thể nhận ra rằng họ không biết nỗi đau phải gánh chịu sẽ khiến anh ta phải nỗ lực ít nhất..</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="{{asset('assets/images/img_bg_1.jpg')}}" alt="about">
                </div>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <span>Productive Staff</span>
                <h2>Đội nhóm chúng tôi</h2>
                <p>Chúng tôi buộc tội xứng đáng nhất với những điều khắc nghiệt nhất trong cuộc sống, nhưng chúng cung cấp cho toàn bộ chuyến bay rắc rối. Anh ấy ghét một số nỗi đau của mình..</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                <div class="fh5co-staff">
                    <img src="{{asset('assets/images/person1.jpg')}}" alt="Free HTML5 Templates by gettemplates.co">
                    <h3>Jean Smith</h3>
                    <strong class="role">Chief Executive Officer</strong>
                    <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                <div class="fh5co-staff">
                    <img src="{{asset('assets/images/person2.jpg')}}" alt="Free HTML5 Templates by gettemplates.co">
                    <h3>Hush Raven</h3>
                    <strong class="role">Co-Owner</strong>
                    <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                <div class="fh5co-staff">
                    <img src="{{asset('assets/images/person3.jpg')}}" alt="Free HTML5 Templates by gettemplates.co">
                    <h3>Alex King</h3>
                    <strong class="role">Co-Owner</strong>
                    <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('client.layouts.master')
