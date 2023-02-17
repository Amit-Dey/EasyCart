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
        .img1{
          border-radius: 0;
          display: block;
          max-width:100%;
          max-height:100%;
          width: auto;
          height: auto;
        }
      </style>
</head>

<body>
    @include('home.header')
    <div class="container mt-5 mb-5">
        <div class="card mb-3 m-auto" style="max-width: 80vw;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="product/{{ $product->image }}" class="card-img img1" alt="Product Image">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h1 class="h1 mb-3"> {{ $product->title }} </h1>
                        <p class="p text-justify mb-3">{{ $product->description }}</p>
                        <p class="p mb-3"><small class="text-muted">Catagory: {{ $product->catagory }}</small></p>
                        <div class="detail-box">
                            @if ($product->discount_price)
                                <div class="row ">
                                    <h6 class="h5 col-md-8"  style="color:blue">
                                        Discount Price: ${{ $product->discount_price }}
                                    </h6>
                                    <h6 class="h5 col-md-4 text-right pr-3" style="color:red; text-decoration:line-through;">
                                        Price: ${{ $product->price }}
                                    </h6>
                                </div>
                            @else
                                <h6 class="h5" style="color:blue">
                                    Price: ${{ $product->price }}
                                </h6>
                            @endif
                        </div>
                        <form method="POST" action="{{url('add_to_cart',$product->id)}}">
                            @csrf
                            <div class="ml-0 mt-3 row">
                                <div class="col-md-3">
                                    <input type="number" min="1" value="1" name="quantity" id="quantity">
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" href="" class="btn btn-outline-danger px-4 py-2 ">
                                        Add To Cart
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
