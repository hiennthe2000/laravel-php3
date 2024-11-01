@section('content')
        <h5 class="bg-info bg-gradient" style="padding: 10px;">Thêm danh mục bản tin</h5>
        <form action="{{ route('storeCategory') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Nhập tên</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nhập tên" name="name" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="summary" class="form-label">Mô tả</label>
                <textarea class="form-control @error('summary') is-invalid @enderror" id="summary" placeholder="Nhập mô tả..." name="summary">{{ old('summary') }}</textarea>
                @error('summary')
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
