<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        #img {
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
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            @if (Session::has('message'))
                <div class=" alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ Session()->get('message') }}
                </div>
            @endif

            <h1 class="h1">Orders List</h1>

            <table class="table table-hover table-dark mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Product Title</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Delivery Status</th>
                        <th scope="col">Images</th>
                        <th scope="col">Delivered</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($order as $item)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->product_title }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->payment_status }}</td>
                            <td>{{ $item->delivery_status }}</td>
                            <td> <img id="img" src="product/{{ $item->image }}"></td>
                            <td>
                                @if ($item->delivery_status=='Processing')
                                    <a class="btn btn-danger"
                                    onclick="return confirm('Do you want to change the delivery status of this product?')"
                                    href="{{ url('delivered', $item->id) }}">Delivere</a>
                                @else
                                    <p class=" bg-success text-light px-3 py-2">Delivered</p>
                                @endif
                            </td>
                        </tr>
                        @php
                            $i += 1;
                        @endphp
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</body>

</html>
