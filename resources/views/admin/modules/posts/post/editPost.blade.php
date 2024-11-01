@section('content')
    <h5 class="bg-info bg-gradient" style="padding: 10px;">Sửa bản tin</h5>
    <form action="{{route('update_post',$edit->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
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
            <label for="contents1" class="form-label">Nội dung</label>
            <input type="text" class="form-control" id="contents1" placeholder="Nhập nội dung..." name="contents" value="{{$edit->contents}}">
        </div>
        <div class="mb-3 mt-3">
            <label for="image" class="form-label">Ảnh hiện tại</label> <br>
            @if($edit->image)
                <img src="{{asset('storage/'.$edit->image)}}" alt="" width="130px" height="90px">
            @else
                <h3><i>Không có ảnh !</i></h3>
            @endif
        </div>
        <div class="mb-3 mt-3">
            <label for="image" class="form-label">Chọn ảnh mới</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
@extends('admin.layouts.master')
