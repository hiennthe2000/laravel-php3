@section('content')
    @foreach($posts as $item)
        <div class="post clearfix">
            <div class="user-block">
                <img class="img-bordered-sm" src="{{asset('storage/'.$item->image)}}" alt="User Image">
                <span class="username">
                          <a href="#">{{$item->name}}</a>
                        </span>
                <span class="description">Ngày đăng: {{$item->created_at}}</span>
            </div>
            <!-- /.user-block -->
            <p>
                {{$item->contents}}
            </p>
        </div>
    @endforeach
@endsection
@extends('admin.layouts.master')
