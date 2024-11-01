@section('content')
    <h5 class="bg-warning bg-gradient" style="padding: 10px;"><b>Danh sách loại sản phẩm</b></h5>
    <div class="row">
        <a href="{{route('addCategoryProduct')}}" class="btn btn-success" style="margin-left: 7px">Thêm loại sản
            phẩm</a>
        <table class="table table-bordered mt-3">
            <thead>
            <tr>
                <th class="align-middle text-center" scope="col">ID</th>
                <th class="align-middle text-center" scope="col">Ảnh</th>
                <th class="align-middle text-center" scope="col">Tên loại</th>
                <th class="align-middle text-center" scope="col">Tóm tắt</th>
                <th class="align-middle text-center" class="align-middle text-center" scope="col">Ngày đăng</th>
                <th class="align-middle text-center" scope="col">Ngày sửa</th>
                <th class="align-middle text-center" scope="col" colspan="2">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $item)
                <tr>
                    <th class="align-middle text-center" scope="row">{{ $item->id }}</th>
                    <td class="align-middle text-center"><img width="100px" src="{{asset('storage/'.$item->image)}}"
                                                              alt=""></td>
                    <td class="align-middle text-center">{{$item->name}}</td>
                    <td class="align-middle text-center" style="width: 300px; height: 110px">{{$item->contents}}</td>
                    <td class="align-middle text-center">{{$item->created_at}}</td>
                    <td class="align-middle text-center">{{$item->updated_at}}</td>
                    <td class="align-middle text-center" style="width: 150px">
                        <a href="{{route('edit_category_product', $item->id)}}" class="btn btn-warning">Sửa</a>
                        <a class="btn bg-primary" href="{{route('deltail_Category_Product', $item->id) }}">Xem</a>
                    </td>
                    <td class="align-middle text-center">
                        <form action="{{ route('delete_category_product', ['id' => $item->id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
@extends('admin.layouts.master')
