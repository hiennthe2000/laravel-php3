@section('content')
    <h5 class="bg-warning bg-gradient" style="padding: 10px;">Sửa bản sản phẩm</h5>
    <form action="{{route('update_product',$edit->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3 mt-3">
                    <label for="image" class="form-label">Chọn loại tin</label> <br>
                    <select class="form-control" aria-label="Default select example"  name="category_id" id="category_id">
                        <option selected>Danh mục</option>
                        @foreach($edit2 as $item)
                            <option value="{{$item->id}}" {{ $item->id == $edit->category_id ? 'selected' : ''}}>{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="namePost" class="form-label">Tiêu đề</label>
                    <input type="text" class="form-control" id="namePost" placeholder="Nhập tiêu đề" name="name" value="{{$edit->name}}">
                </div>
                <div class="mb-3 mt-3">
                    <label for="slugPost" class="form-label">Đường dẫn</label>
                    <input type="text" class="form-control" id="slugPost" placeholder="Nhập đường dẫn" name="slug" value="{{$edit->slug}}">
                </div>
                <div class="mb-3">
                    <label for="contents1" class="form-label">Mô tả</label>
                    <input type="text" class="form-control" id="contents1" placeholder="Nhập mô tả..." name="contents" value="{{$edit->contents}}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3 mt-3">
                    <label for="price" class="form-label">Giá gốc</label>
                    <input type="number" class="form-control" id="price" placeholder="Nhập giá tiền..." name="price" value="{{$edit->price}}">
                </div>
                <div class="mb-3 mt-3">
                    <label for="sale_price" class="form-label">Giá giảm</label>
                    <input type="number" class="form-control" id="sale_price" placeholder="Nhập giá giảm..." name="sale_price" value="{{$edit->sale_price}}">
                </div>
                <div class="mb-3 mt-3">
                    <label for="image" class="form-label">Chọn ảnh mới</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="mb-3 mt-3">
                    <label for="image" class="form-label">Ảnh hiện tại</label> <br>
                    @if($edit->image)
                        <img src="{{asset('storage/'.$edit->image)}}" alt="" width="130px" height="90px">
                    @else
                        <h3><i>Không có ảnh !</i></h3>
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
@extends('admin.layouts.master')
