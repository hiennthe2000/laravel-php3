<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="fw-bold mb-4">Thông tin đơn hàng</h1>
            <hr class="my-4">

            <!-- Thông tin sản phẩm -->
            @foreach ($cartItems as $cartItem)
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5>{{ $cartItem->product->name }}</h5>
                        <p><img class="img-fluid rounded-2 " style="width: 300px" src="{{ $cartItem->product->thumbnail }}" alt="{{ $cartItem->product->name }}"></p>
                        <p class="mb-0">{{ $cartItem->product->price }} VNĐ</p>
                    </div>
                    <p class="mb-0">Số lượng: {{ $cartItem->quantity }}</p>
                </div>
                <hr class="my-2">
            @endforeach

            {{--            <h5 class="fw-bold">Tổng tiền: {{ $userData['total'] }} VNĐ</h5>--}}
        </div>

        <div class="col-lg-4">
            <h1 class="fw-bold mb-4">Thông tin khách hàng</h1>
            <hr class="my-4">

            <p class="fw-bold">Tên khách hàng: {{ $userData['customer_name'] }}</p>

            <p class="fw-bold">Số điện thoại: {{ $userData['customer_phone'] }}</p>
        </div>
    </div>
</div>

<!-- Script tags for Bootstrap JavaScript and Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
</body>
</html>
