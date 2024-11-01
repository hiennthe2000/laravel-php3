@section('content')
    <h5 class="bg-info bg-gradient" style="padding: 10px;">Sửa danh mục bản tin</h5>
    <form action="{{ route('update_category', $edit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Nhập tên</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nhập tên" name="name" value="{{ old('name', $edit->name) }}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Mô tả</label>
            <textarea class="form-control @error('summary') is-invalid @enderror" id="summary" placeholder="Nhập mô tả..." name="summary">{{ old('summary', $edit->summary) }}</textarea>
            @error('summary')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="image" class="form-label">Ảnh hiện tại</label> <br>
            @if($edit->image)
                <img src="{{ asset('storage/'.$edit->image) }}" alt="" width="130px" height="90px">
            @else
                <h3><i>Không có ảnh!</i></h3>
            @endif
        </div>
        <div class="mb-3 mt-3">
            <label for="image" class="form-label">Chọn ảnh mới</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>

@endsection
@extends('admin.layouts.master')
