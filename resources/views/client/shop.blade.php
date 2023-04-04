@extends('layouts.app')
@section('content')

<div class="ourproduct">
  <div class="container">
    <div class="row product_style_3">
      <div class="col-md-12 col-sm-12">
        <form class="main_form">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
              <input class="form-control" placeholder="Phone" type="text" name="Phone">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
              <input class="form-control" placeholder="Phone" type="text" name="Phone">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
              <button class="send">Send</button>
            </div>
          </div>
        </form>
      </div>
      @foreach($products as $product)
      <!-- product -->
      <div class=" col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center">
              <a href="{{route('product',[$product->slug])}}">
                <img src="{{asset('asset/images/products/' . $product->images[0]->path)}}" alt="{{$product->name}}" />
              </a>
              <div class="overlay_hover">
                <a class="add-bt" href="#">+ Add to cart</a>
              </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">{{$product->price}}VNĐ
              @if($product->disccout)
              <span class="old_price">{{ $product->disccout}}VNĐ</span>
              @endif
            </p>
            <a href="{{route('product',[$product->slug])}}" class="product_descr">{{$product->name}}</a>
          </div>
        </div>
      </div>
      <!-- end product -->
      @endforeach
    </div>
  </div>
</div>
@endsection