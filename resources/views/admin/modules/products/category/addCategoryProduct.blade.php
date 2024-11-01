@section('content')
    <h5 class="bg-warning bg-gradient" style="padding: 10px;"><b>Thêm danh mục sản phẩm</b></h5>
    <form action="{{ route('storeCategoryProduct') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Tên mục</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nhập tên.." name="name">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="contents" class="form-label">Mô tả</label>
            <textarea type="text" class="form-control @error('contents') is-invalid @enderror" id="contents" placeholder="Nhập mô tả..." name="contents"></textarea>
            @error('contents')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="image" class="form-label">Thêm ảnh</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>

@endsection
@extends('admin.layouts.master')
