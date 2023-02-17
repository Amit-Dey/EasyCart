<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        @include('admin.css')
        <style>
          .int1{
            color: black;
          }
          .int1:hover{
            color: white;
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
                <h1 class="h1" >Add New Product</h1>
                
                <form method="POST" action="{{url('add_product')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                      <div class="col-md-3 mb-3">
                        <label>Product Title</label>
                        <input type="text" name="title" class="form-control int1" placeholder="Product Title" required>
                      </div>
                      
                      <div class="col-md-3 mb-3">
                        <label>Product quantity</label>
                        <input type="text" name="quantity" class="form-control int1" placeholder="Product quantity" required>
                      </div>

                      <div class="col-md-3 mb-3">
                        <label>Product price</label>
                          <input type="text" name="price" class="form-control int1"  placeholder="Product price" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label>Product discount price</label>
                        <input type="text" name="discount_price" value="" class="form-control int1" placeholder="Product discount price">
                      </div>
                    </div>
                    <div class="form-group">
                        <label>Product description</label>
                        <textarea name="description" class="form-control int1" rows="5" placeholder="Product description" required></textarea>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label>Product Catagory</label>
                        <select name="catagory" class="form-control" required>
                        <option value="" selected >Add a catagory</option>
                        @foreach ($catagory as $item)
                            <option value="{{$item->catagory_name}}" >{{$item->catagory_name}}</option>
                        @endforeach
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="exampleFormControlFile1">Product Image</label>
                        <input type="file" name="image" class="form-control-file int1" required>  
                      </div>
                    </div>
                    <button class="btn btn-success px-4 py-3" type="submit">Add Product</button>
                  </form>

            
        </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
    </body>
</html>