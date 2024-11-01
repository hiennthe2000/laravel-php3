@section('content')
    <h5 class="bg-warning bg-gradient" style="padding: 10px;"><b>Danh sách Ngưởi dùng</b></h5>
    <div class="row">
        <table class="table table-bordered mt-3">
            <thead>
            <tr>
                <th class="align-middle text-center" scope="col">ID</th>
                <th class="align-middle text-center" scope="col">Họ tên</th>
                <th class="align-middle text-center" scope="col">Email</th>
                <th class="align-middle text-center" scope="col">Ngày tạo</th>
                <th class="align-middle text-center" scope="col">Vai trò</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
                <tr>
                    <th class="align-middle text-center" scope="row">{{ $item->id }}</th>
                    <td class="align-middle text-center">{{$item->name}}</td>
                    <td class="align-middle text-center">{{$item->email}}</td>
                    <td class="align-middle text-center">{{$item->created_at}}</td>
                    <td class="align-middle text-center">{{$item->role}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
@extends('admin.layouts.master')
