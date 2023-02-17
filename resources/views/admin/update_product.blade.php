<!DOCTYPE html>
<html lang="en">
    <base href="/public">
    <head>
        <!-- Required meta tags -->
        @include('admin.css')
        <style>
          .int1{
            color: black;
            background: white;
          }
          .int1:hover{
            color: white;
            background: black
          }
          .img1{
            border-radius: 0;
            display: block;
            max-width:13vw;
            max-height:20vh;
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
                    <button type="button" class="close" data-dismiss="alert" 
                    aria-hidden="true">x</button>
                    {{Session()->get('message')}}
                </div>
                    
                @endif
                <h1 class="h1" >Update Product</h1>
                
                <form method="POST" action="{{url('save_update_product',$product->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                      <div class="col-md-3 mb-3">
                        <label>Product Title</label>
                        <input type="text" name="title" class="form-control int1" value="{{$product->title}}" placeholder="Product Title" required>
                      </div>
                      
                      <div class="col-md-3 mb-3">
                        <label>Product quantity</label>
                        <input type="text" value="{{$product->quantity}}" name="quantity" class="form-control int1" placeholder="Product quantity" required>
                      </div>

                      <div class="col-md-3 mb-3">
                        <label>Product price</label>
                          <input type="text" value="{{$product->price}}" name="price" class="form-control int1"  placeholder="Product price" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label>Product discount price</label>
                        <input type="text" value="{{$product->discount_price}}" name="discount_price" value="" class="form-control int1" placeholder="Product discount price">
                      </div>
                    </div>
                    <div class="form-group">
                        <label>Product description</label>
                        <textarea name="description"  class="form-control int1" rows="5" placeholder="Product description" required>{{$product->description}}</textarea>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label >Current Product Image</label>
                            <img class="img img1" src="product/{{$product->image}}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Change Product Image</label>
                            <input type="file" value="product/{{$product->image}}" name="image" class="form-control-file int1" >  
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Product Catagory</label>
                            <select name="catagory" class="form-control" required>
                            <option value="{{$product->catagory}}" selected >{{$product->catagory}}</option>
                            @foreach ($catagory as $item)
                                <option value="{{$item->catagory_name}}" >{{$item->catagory_name}}</option>
                            @endforeach
                            </select>
                          </div>
                    </div>
                    <button class="btn btn-primary px-4 py-3" type="submit">Update Product</button>
                  </form>

            
        </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
    </body>
</html>