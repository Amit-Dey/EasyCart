<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <base href="/public">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="home/images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style>
        .img1 {
            border-radius: 0;
            display: block;
            max-width: 13vw;
            max-height: 20vh;
            width: auto;
            height: auto;
        }
    </style>
</head>

<body>
    @include('home.header')
    <div class="container mt-5 mb-5">
        @if (Session::has('message'))
            <div class=" alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ Session()->get('message') }}
            </div>
        @endif

        <h1 class="h1">Prosucts List</h1>

        <table class="table table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Title</th>
                    <th scope="col">Product Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Images</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                    $totalPrice = 0;
                @endphp
                @foreach ($cart as $item)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $item->product_title }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>${{ $item->price }}</td>
                        <td> <img class="img1" src="product/{{ $item->image }}"></td>
                        <td>
                            <a class="btn btn-outline-danger"
                                onclick="return confirm('Do you want to remove this product?')"
                                href="{{ url('remove_cart', $item->id) }}">Remove Product</a>
                        </td>

                    </tr>
                    @php
                        $i += 1;
                        $totalPrice += $item->price;
                    @endphp
                @endforeach
                <tr>
                    <th colspan="3">Total Price</th>
                    <th scope="col">${{ $totalPrice }}</th>
                    <td colspan="2" class="pr-4 text-right" scope="col">
                        <a class="btn btn-success mr-5 px-3 py-2" href="{{ url('cash_order') }}">Cash On Delivery</a>

                        <a class="btn btn-success mr-5 px-3 py-2" href="{{ url('stripe',$totalPrice) }}">Pay Using Card</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('home.footer')
    <!-- footer end -->
    <div class="cpy_">
        <p>© 2022 All Rights Reserved By <a href="https://github.com/Amit-dey">Amit-dey</a></p>
    </div>
    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html>
