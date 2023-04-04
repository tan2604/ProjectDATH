@extends('layouts.app')
@section('content')
<div class="layout_padding-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="img_box">
                    <figure><img src="{{asset('asset/images/products/' . $product->images[0]->path)}}" alt="#" />
                    </figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 product_detail_side">
                <div class="abotext_box">
                    <div class="product-heading">
                        <h2>{{$product->name}}</h2>
                    </div>
                    <div class="product-detail-side">
                        <span><del>$679.89</del></span><span class="new-price">{{$product->price}}</span>
                        <span class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                        <span class="review">({{$product->comments->count()}} customer review)</span>
                    </div>
                    <div class="detail-contant">
                        <p>
                            {!! $product->description !!}
                            {{-- <br><span class="stock">2 in stock</span> --}}
                        </p>
                        <form class="cart" method="post" action="shop-cart.html">
                            <div class="quantity">
                                <input step="1" min="1" max="5" name="quantity" value="1" title="Qty"
                                    class="input-text qty text" size="4" type="number">
                            </div>
                            <button type="submit" class="bt_main">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="tab_bar_section">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab"
                                    href="#description">Description</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Reviews (2)</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="description" class="tab-pane active">
                                <div class="product_desc">
                                    {!! $product->content !!}
                                </div>
                            </div>
                            <div id="reviews" class="tab-pane fade">
                                <div class="product_review">
                                    <h3>Reviews ({{$product->comments->count()}})</h3>
                                    @foreach($product->comments as $comment)
                                    <div class="commant-text row">
                                        <div class="col-lg-2 col-md-2 col-sm-4">
                                            <div class="profile">
                                                <img class="img-responsive"
                                                    src="{{asset('asset/images/'. $comment->user->avatar)}}" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8">
                                            <h5>{{$comment->user->name}}</h5>
                                            <p><span class="c_date">{{$comment->created_at}}</span> | <span><a
                                                        rel="nofollow" class="comment-reply-link" href="#">Trả
                                                        lời</a></span></p>
                                            <span class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </span>
                                            <p class="msg">{{$comment->message}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="full review_bt_section">
                                                <div class="float-right">

                                                    <a class="bt_main" data-toggle="collapse" href="#collapseExample"
                                                        role="button" aria-expanded="false"
                                                        aria-controls="collapseExample">Tạo bình luận</a>

                                                </div>
                                            </div>

                                            <div class="full">

                                                <div id="collapseExample" class="full collapse commant_box">
                                                    <form accept-charset="UTF-8" action="index.html" method="post">
                                                        <input id="ratings-hidden" name="rating" type="hidden">
                                                        <textarea class="form-control animated" cols="50"
                                                            id="new-review" name="comment"
                                                            placeholder="Enter your review here..."
                                                            required=""></textarea>
                                                        <div class="full_bt center">
                                                            <button class="bt_main" type="submit">Đăng</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection