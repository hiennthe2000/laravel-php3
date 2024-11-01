@section('content')
    <section class="content">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">
                    @foreach($product as $item)
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>{{$item->name}}</b></h2>
                                            <p class="text-muted text-sm">{{$item->contents}}</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><i>Giá gốc: </i>{{$item->price}}</li>
                                                <li class="small"><i>Giá giảm: </i>{{$item->sale_price}}</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="{{asset('storage/'.$item->image)}}" alt="user-avatar" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('admin.layouts.master')
