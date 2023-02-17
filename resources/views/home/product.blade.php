<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            @foreach ($product as $item)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{url('product_details',$item->id)}}" class="option1">
                                    See Details
                                </a>
                                <form method="POST" action="{{url('add_to_cart',$item->id)}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3 ml-5">
                                            <input type="number" min="1" value="1" name="quantity" id="quantity">
                                        </div>
                                        <div class="col-md-6">
                                            <button style="border-radius: 30px" type="submit" href="" class="btn btn-outline-danger px-4 py-2">
                                                Add To Cart
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="product/{{$item->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                              {{$item->title}}
                            </h5>
                            @if($item->discount_price)
                              <h6 style="color:blue">
                                 ${{$item->discount_price}}
                              </h6>
                              <h6 style="color:red; text-decoration:line-through;">
                                ${{$item->price}}
                              </h6>
                              @else
                              <h6 style="color:blue">
                                ${{$item->price}}
                              </h6>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="box">
            {!! $product->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</section>
