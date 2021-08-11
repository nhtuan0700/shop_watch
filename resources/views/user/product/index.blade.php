@extends('user.master')
@section('title')
    Sản phẩm
@endsection
@section('content')
    <div class="shop-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-2 mb-md--30">
                    <div class="row">
                        <div class="col-12">
                            <!-- Shop Toolbar Start -->
                            <div class="shop-toolbar">
                                <div class="product-view-mode" data-default="list"><a class="grid-2"
                                                                                      data-target="gridview-2" data-toggle="tooltip" data-placement="top"
                                                                                      title="2">2</a><a class="grid-3" data-target="gridview-3"
                                                                                                        data-toggle="tooltip" data-placement="top" title="3">3</a><a
                                        class="grid-4" data-target="gridview-4" data-toggle="tooltip"
                                        data-placement="top" title="4">4</a><a class="grid-5"
                                                                               data-target="gridview-5" data-toggle="tooltip" data-placement="top"
                                                                               title="5">5</a><a class="active list" data-target="listview"
                                                                                                 data-toggle="tooltip" data-placement="top" title="5">List</a></div><span
                                    class="product-pages">Showing 1 to 9 of 11 (2 Pages)</span>
                                <div class="product-showing"><label class="select-label">Show:</label><select
                                        class="short-select nice-select">
                                        <option value="1">9</option>
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="1">5</option>
                                        <option value="1">9</option>
                                    </select></div>
                                <div class="product-short"><label class="select-label">Short By:</label><select
                                        class="short-select nice-select">
                                        <option value="1">Relevance</option>
                                        <option value="2">Name, A to Z</option>
                                        <option value="3">Name, Z to A</option>
                                        <option value="4">Price, low to high</option>
                                        <option value="5">Price, high to low</option>
                                    </select></div>
                            </div><!-- Shop Toolbar End -->
                        </div>
                    </div><!-- Main Shop wrapper Start -->
                    <div class="shop-product-wrap listview row no-gutters">
                        @foreach($products as $item_product)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                <div class="mirora-product mb-md--10">
                                    <div class="product-img"><img src="{{ asset('storage/'.$item_product->image) }}"
                                                                  alt="Product" class="primary-image" />
                                        @foreach($item_product->image_detail as $item1)
                                            <img src="{{ asset('storage/'.$item1) }}" alt="Product"
                                                 class="secondary-image" />
                                        @endforeach
                                    </div>
                                    <div class="product-content text-center">
                                        @foreach($brands as $item_brand)
                                            @if($item_brand->id == $item_product->id_brand)
                                                <span>{{ $item_brand->name }}</span>
                                            @endif
                                        @endforeach

                                        <h4><a href="{{ route('product.detail', ['id'=>$item_product->id]) }}">{{ $item_product->name }}</a></h4>
                                        <div class="product-price-wrapper"><span class="money">{{ $item_product->price }}</span>
                                        </div>
                                    </div>
                                    <div class="mirora_product_action text-center position-absolute">
                                        <div class="product-rating"><span><i class="fa fa-star theme-star"></i><i
                                                    class="fa fa-star theme-star"></i><i
                                                    class="fa fa-star theme-star"></i><i
                                                    class="fa fa-star theme-star"></i><i
                                                    class="fa fa-star"></i></span></div>
                                        <p>{{ $item_product->description }}</p>
                                        <div class="product-action"><a class="same-action" href="#"
                                                                       title="wishlist"><i class="fa fa-heart-o"></i></a><a
                                                class="add_cart cart-item action-cart" href="#"
                                                title="wishlist"><span>Add to cart</span></a><a
                                                class="same-action compare-mrg" data-toggle="modal"
                                                data-target="#productModal" href="#"><i
                                                    class="fa fa-sliders fa-rotate-90"></i></a></div>
                                    </div>
                                </div>
                                <div class="mirora-product-list">
                                    <div class="product-img"><img src="{{ asset('storage/'.$item_product->image) }}"
                                                                  alt="Product" class="primary-image" />
                                        @foreach($item_product->image_detail as $item1)
                                            <img src="{{ asset('storage/'.$item1) }}" alt="Product"
                                                 class="secondary-image" />
                                        @endforeach
                                    </div>
                                    <div class="product-content">
                                        @foreach($brands as $item_brand)
                                            @if($item_brand->id == $item_product->id_brand)
                                                <span>{{ $item_brand->name }}</span>
                                            @endif
                                        @endforeach
                                        <h4><a href="{{ route('product.detail', ['id'=>$item_product->id]) }}">{{ $item_product->name }}</a></h4>
                                        <div class="product-rating"><span><i class="fa fa-star theme-star"></i><i
                                                    class="fa fa-star theme-star"></i><i
                                                    class="fa fa-star theme-star"></i><i
                                                    class="fa fa-star theme-star"></i><i
                                                    class="fa fa-star"></i></span></div>
                                        <p class="product-desc">{{ $item_product->description }}</p>
                                        <div class="product-price-wrapper"><span class="money">{{ number_format($item_product->price) }} VNĐ</span>
                                        </div>
                                        <div class="product-action"><a class="add_cart cart-item action-cart"
                                                                       href="cart.html" title="wishlist"><span>Add to cart</span></a><a
                                                class="same-action" href="wishlist.html" title="wishlist"><i
                                                    class="fa fa-heart-o"></i></a><a class="same-action compare-mrg"
                                                                                     data-toggle="modal" data-target="#productModal"
                                                                                     href="compare.html"><i class="fa fa-sliders fa-rotate-90"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div><!-- Main Shop wrapper End -->
                    <!-- Pagination Start -->
                    <div class="pagination-wrap mt--15 mt-md--10">
                        <p class="page-ammount">Showing 1 to 9 of 15 (2 Pages)</p>
                        <ul class="pagination">
                            <li><a href="" class="first">|&lt;</a></li>
                            <li><a href="" class="prev">&lt;</a></li>
                            <li><a href="" class="current">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="" class="next">&gt;</a></li>
                            <li><a href="" class="next">&gt;|</a></li>
                        </ul>
                    </div><!-- Pagination End -->
                </div>
                <div class="col-lg-3 order-lg-1">
                    <aside class="shop-sidebar">
                        <div class="search-filter">
                            <div class="filter-price">
                                <h3 class="filter-heading">Giá</h3>
                                <ul class="filter-list">
                                    <li>
                                        <div class="filter-input filter-radio"><input type="radio"
                                                                                      name="pricerange" id="pricerange-1" checked><label
                                                for="pricerange-1">$55 - $100 (3)</label></div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-radio"><input type="radio"
                                                                                      name="pricerange" id="pricerange-2"><label
                                                for="pricerange-2">$55 - $200 (2)</label></div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-radio"><input type="radio"
                                                                                      name="pricerange" id="pricerange-3"><label
                                                for="pricerange-3">$300 - $500 (6)</label></div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-radio"><input type="radio"
                                                                                      name="pricerange" id="pricerange-4"><label
                                                for="pricerange-4">$700 - $1000 (2)</label></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-categories">
                                <h3 class="filter-heading">Danh mục</h3>
                                <ul class="filter-list">
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="category1" id="category1" checked><label
                                                for="category1">Category1</label></div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="category2" id="category2"><label
                                                for="category2">Category2</label></div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="category3" id="category3"><label
                                                for="category3">Category3</label></div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="category4" id="category4"><label
                                                for="category4">Category4</label></div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="category5" id="category5"><label
                                                for="category5">Category5</label></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-color">
                                <h3 class="filter-heading">Màu sắc</h3>
                                <ul class="filter-list">
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="black" id="black"><label for="black">black (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="blue" id="blue"><label for="blue">blue (6)</label></div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="brown" id="brown"><label for="brown">brown (7)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="white" id="white"><label for="white">white (4)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="red" id="red"><label for="red">red (1)</label></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-color">
                                <h3 class="filter-heading">Thương hiệu</h3>
                                <ul class="filter-list">
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="ferragamo" id="ferragamo"><label for="ferragamo">ferragamo
                                                (11)</label></div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="hermes" id="hermes"><label for="hermes">hermes (9)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="louis" id="louis"><label for="louis">louis vuitton
                                                (11)</label></div>
                                    </li>
                                    <li>
                                        <div class="filter-input filter-checkbox"><input type="checkbox"
                                                                                         name="christian" id="christian"><label for="christian">Christian
                                                Dior (8)</label></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="banner-static"><a href="#"><img src="user/img/banner/img-sidebar.jpg"
                                                                    alt="Banner"></a></div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
