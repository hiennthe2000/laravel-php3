@section('content')
    <h5 class="bg-info bg-gradient" style="padding: 10px;">Thêm bản tin</h5>
    <form action="{{ route('add_post_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 mt-3">
            <label for="image" class="form-label">Chọn loại tin</label> <br>
            <select class="form-control @error('category_id') is-invalid @enderror" aria-label="Default select example" name="category_id" id="category_id">
                <option selected>Danh mục</option>
                @foreach($hien as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            @error('category_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="namePost" class="form-label">Tiêu đề</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="namePost" placeholder="Nhập tiêu đề" name="name">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="slugPost" class="form-label">Đường dẫn</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slugPost" placeholder="Nhập đường dẫn" name="slug">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="contents" class="form-label">Nội dung</label>
            <textarea class="form-control @error('contents') is-invalid @enderror" id="contents" placeholder="Nhập nội dung..." name="contents"></textarea>
            @error('contents')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="image" class="form-label">Thêm ảnh</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>

@endsection
@extends('admin.layouts.master')
