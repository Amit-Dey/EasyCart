<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        @include('admin.css')
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
                <h1 class="h1" >Add New Catagory</h1>
                <form class="form flex mt-5" method="POST" action="{{url('add_catagory')}}">
                    @csrf
                    <input class="input-group-text mr-4" name="catagory_name" type="text" placeholder="Enter catagory name">
                    <button type="submit" class="btn btn-success">Add Catagory</button>
                </form>
            <table class="table table-hover table-dark mt-5">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Catagory Name</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($data as $item)                        
                    <tr>
                      <th scope="row">{{$i}}</th>
                      <td>{{$item->catagory_name}}</td>
                      <td>{{$item->updated_at}}</td>
                      <td>
                        <a  class="btn btn-outline-danger" 
                        onclick="return confirm('Do you want to delete this catagory?')"
                        href="{{url('delete_catagory',$item->id)}}" >Delete</a>
                      </td>
                    </tr>
                    @php
                        $i+=1;
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