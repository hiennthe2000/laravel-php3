@section('content')

    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url({{asset('assets/images/img_bg_2.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
                            <h1>Liên hệ</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-push-1 animate-box">

                    <div class="fh5co-contact-info">
                        <h3>Thông tin liên lạc</h3>
                        <ul>
                            <li class="address">198 Nguyễn văn Cừ, <br> An Khánh, Ninh Kiều, Cần Thơ</li>
                            <li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li class="email"><a href="mailto:info@yoursite.com">thehienpoly@gmail.com</a></li>
                            <li class="url"><a href="http://gettemplates.co">asm.net</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6 animate-box">
                    <h3>Gửi phản hồi</h3>
                    <form action="#">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="text" id="fname" class="form-control" placeholder="Điền họ...">
                            </div>
                            <div class="col-md-6">
                                <!-- <label for="lname">Last Name</label> -->
                                <input type="text" id="lname" class="form-control" placeholder="Điền tên...">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="text" id="email" class="form-control" placeholder="Email...">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <input type="text" id="subject" class="form-control" placeholder="Chủ đề...">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Nội dung tin nhắn..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Gửi" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <div id="map" style="margin: auto" class="animate-box" data-animate-effect="fadeIn"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.4204309702136!2d105.75565247393463!3d9.982086773344939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08906415c355f%3A0x416815a99ebd841e!2zRlBUIFBPTFlURUNITklDIEPhuqZOIFRIxqA!5e0!3m2!1svi!2s!4v1689701801331!5m2!1svi!2s" width="100%" height="450" style="border:0; margin: auto" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
@endsection
@extends('client.layouts.master')
