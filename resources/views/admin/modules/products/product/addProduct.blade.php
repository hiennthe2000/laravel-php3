@section('content')
    <h5 class="bg-warning bg-gradient" style="padding: 10px;"><b>Thêm sản phẩm</b></h5>
    <form action="{{route('add_product_store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3 mt-3">
                    <label for="image" class="form-label">Chọn loại sản phẩm</label> <br>
                    <select class="form-control @error('category_id') is-invalid @enderror" aria-label="Default select example" name="category_id" id="category_id">
                        <option selected>Danh mục</option>
                        @foreach($product as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="namePost" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="namePost" placeholder="Nhập tiêu đề" name="name">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="slugPost" class="form-label">Đường dẫn</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slugPost" placeholder="Nhập đường dẫn" name="slug">
                    @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="contents" class="form-label">Mô tả</label>
                    <textarea type="text" class="form-control @error('contents') is-invalid @enderror" id="contents" placeholder="Nhập mô tả..."
                              name="contents"></textarea>
                    @error('contents')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3 mt-3">
                    <label for="price" class="form-label">Giá gốc</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Nhập giá tiền..." name="price">
                    @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="sale_price" class="form-label">Giá giảm</label>
                    <input type="number" class="form-control @error('sale_price') is-invalid @enderror" id="sale_price" placeholder="Nhập giá giảm..." name="sale_price">
                    @error('sale_price')
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
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
@extends('admin.layouts.master')
