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

            <h1 class="h1">Prosucts List</h1>

            <table class="table table-hover table-dark mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Catagory</th>
                        <th scope="col">Price</th>
                        <th scope="col">Discount Price</th>
                        <th scope="col">Images</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($product as $item)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->catagory }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->discount_price }}</td>
                            <td> <img id="img" src="product/{{ $item->image }}"></td>
                            <td>
                                <a class="btn btn-outline-danger"
                                    onclick="return confirm('Do you want to delete this product?')"
                                    href="{{ url('delete_product', $item->id) }}">Delete</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-primary"
                                    onclick="return confirm('Do you want to edit this product?')"
                                    href="{{ url('update_product', $item->id) }}">Edit</a>
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
