@extends('layouts.masterlayouts')
@section('content')
<main class="content">
    <div class="content__wrapper">
        <div class="container">
            <div class="row row--mt">
                <div class="col-xl-2 sidebar sidebar--modifi">
                    <div class="sidebar__title sidebar__title--modifi mt-4">GIÁ</div>
                    <div class="filter_price my-2">
                        <input type="range" name="" id="" class="w-100">
                    </div>
                    <div class="filter_price-min filter_price- mb-3">
                        <div class="price__title fs-14 mb-2">Giá thấp nhất</div>
                        <input type="text" value="460,000" name="" id="" class="w-100 p-2 px-3">
                    </div>
                    <div class="filter_price-max filter_price- mb-3">
                        <div class="price__title fs-14 mb-2">Giá cao nhất</div>
                        <input type="text" value="1,500,000" name="" id="" class="w-100 p-2 px-3">
                    </div>
                    <div class="filter_brand">
                        <div class="brand__title mt-4 mb-2">THƯƠNG HIỆU</div>
                        <ul class="navbar-nav">
                            <li class="nav-item py-2">
                                <a class="nav-link text-body d-flex align-items-center fs-15" href="#">
                                    <i class="fa-solid fa-square text-muted fs-34 me-3"></i>
                                    Gas Quỳnh Lưu
                                </a>
                            </li>
                            <li class="nav-item py-2">
                                <a class="nav-link text-body d-flex align-items-center fs-15" href="#">
                                    <i class="fa-solid fa-square text-muted fs-34 me-3"></i>
                                    Gas Gia Đình
                                </a>
                            </li>
                            <li class="nav-item py-2">
                                <a class="nav-link text-body d-flex align-items-center fs-15" href="#">
                                    <i class="fa-solid fa-square text-muted fs-34 me-3"></i>
                                    Gas Pacific
                                </a>
                            </li>
                            <li class="nav-item py-2">
                                <a class="nav-link text-body d-flex align-items-center fs-15" href="#">
                                    <i class="fa-solid fa-square text-muted fs-34 me-3"></i>
                                    Gas Petro
                                </a>
                            </li>
                            <li class="nav-item py-2">
                                <a class="nav-link text-body d-flex align-items-center fs-15" href="#">
                                    <i class="fa-solid fa-square text-muted fs-34 me-3"></i>
                                    Gas Phoenix
                                </a>
                            </li>
                            <li class="nav-item py-2">
                                <a class="nav-link text-body d-flex align-items-center fs-15" href="#">
                                    <i class="fa-solid fa-square text-muted fs-34 me-3"></i>
                                    Gas Super
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-10 ps-4 content-main">
                    <div class="filter-nav my-3 d-flex align-items-center position-relative">
                        <div class="filter-nav__icon me-5 color-main">
                            <i class="fa-solid fa-filter fs-1"></i>
                        </div>
                        <div class="filter-sort fs-14 d-flex me-5 align-items-center">
                            <div class="filter-sort__title me-3">Sắp xếp theo: </div>
                            <div class="filter-sort__select f-s__select--modifi position-relative">
                                <div class="select__box select__box--base"></div>
                                <div class="select__text select__text--base position-absolute">Mặc định</div>
                                <div class="select__icon select__icon--modifi position-absolute">
                                    <i class="fa-solid fa-caret-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="filter-sort fs-14 d-flex align-items-center">
                            <div class="filter-sort__icon f-s__icon--modifi">
                                <i class="fa-solid fa-caret-up"></i>
                            </div>
                            <div class="filter-sort__icon f-s__icon--modifi">
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </div>
                        <div class="filter-sort fs-14 d-flex align-items-center">
                            <div class="filter-sort__text d-flex align-items-center f-s__text--modifi active">
                                <p class="m-0 fs-14">Xem dang lưới</p>
                            </div>
                            <div class="filter-sort__text d-flex align-items-center f-s__text--modifi">
                                <p class="m-0 fs-14">Xem dạng danh sách</p>
                            </div>
                        </div>
                    </div>
                    <div class="number-product fs-main fw-bold mb-3">(22 Sản phẩm)</div>
                    <div class="products">
                        <div class="product">
                            <div class="product__boximg product__boximg--bg">
                                <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            </div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__boximg product__boximg--bg">
                                <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            </div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__boximg product__boximg--bg">
                                <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            </div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__boximg product__boximg--bg">
                                <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            </div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__boximg product__boximg--bg">
                                <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            </div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__boximg product__boximg--bg">
                                <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            </div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__boximg product__boximg--bg">
                                <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            </div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__boximg product__boximg--bg">
                                <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            </div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__boximg product__boximg--bg">
                                <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            </div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__boximg product__boximg--bg">
                                <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            </div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__boximg product__boximg--bg">
                                <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            </div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product__boximg product__boximg--bg">
                                <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            </div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-viewmore w-100 d-flex justify-content-center my-4">
                        <button class="btn bg-main text-white fs-main p-2 px-5">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="selling-products">
                <span class="selling-products__title sp_t--modifi mb-3 d-block">GAS BÁN CHẠY</span>
                <div class="d-flex align-items-center justify-content-center w-100 position-relative">
                    <div class="box-icon-nav bic--left">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="products align-items-center justify-content-center w-100">
                        <div class="px-0 product">
                            <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            <div class="box-gift">Nhiều quà tặng hấp dẫn</div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="px-0 product">
                            <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            <div class="box-gift">Nhiều quà tặng hấp dẫn</div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="px-0 product">
                            <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            <div class="box-gift">Nhiều quà tặng hấp dẫn</div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                        <div class="px-0 product">
                            <img class="w-100 img--mw" src="{{asset('images/binh-gas-12kg-13.png')}}" alt="">
                            <div class="box-gift">Nhiều quà tặng hấp dẫn</div>
                            <div class="product-s-name">Gas PetroQLuu 12kg</div>
                            <div class="product-s-price"> 450,00 đ</div>
                            <div class="product-s-stars">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="box-gifts d-flex align-items-center">
                                <img src="{{asset('images/endowinproduct.png')}}" alt="">
                                <span>Tặng bịch đường 500g</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-icon-nav bic--right">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection