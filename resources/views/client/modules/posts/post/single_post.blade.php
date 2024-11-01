@section('content')
    @foreach($posts3 as $item)
    <div id="fh5co-about">
        <div class="container">
            <div class="about-content">
                <div class="row animate-box">
                    <div class="col-md-6">
                        <div class="desc">
                            <h2>{{$item->name}}</h2>
                            <p>{{$item->contents}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-2" style="margin-top: 5rem">
                        <img class="img-responsive" src="{{asset('storage/'.$item->image)}}" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
@extends('client.layouts.master')
