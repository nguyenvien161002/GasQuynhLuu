<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ Thống Bán Lẻ Gas - Bếp Gas | Gas QUỲNH LƯU</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    @vite(["resources/sass/app.scss","resources/css/app.css"])
</head>

<body>
    <div id="app">
        <header class="header">
            <div class="wrapper__header wrapper__header--pofied">
                <div class="header__main header__main--base">
                    <div class="container expand-lilte-header">
                        <a class="title-contact pe-2" href="">Liên hệ</a>
                        <span class="title-expand ps-2">Kết nối</span>
                        <div class="box-social ms-3">
                            <img src="{{asset('images/fb.png')}}" alt="">
                            <img src="{{asset('images/youtube.png')}}" alt="" class="ms-3">
                        </div>
                    </div>
                    <div class="container h-100">
                        <div class="row w-100 mx-0">
                            <div class="header__left header--modifi header__left--modifi d-flex col-xl-7 col-md-7 align-items-center">
                                <div class="box-logo me-4">
                                    <img src="{{asset('images/logo2.png')}}" alt="" class="logo--img">
                                </div>
                                <div class="box-search w-100 position-relative ms-2">
                                    <div name="" id="" class="box-search__list  box-search__list--modifi position-absolute h-100">
                                        <span>Tất cả sản phẩm <i class="fa-solid fa-caret-down"></i></span>
                                    </div>
                                    <input type="text" value="" class="input-search w-100" placeholder="Tìm kiếm...">
                                    <div class="btn-search position-absolute"><i class="fa-solid fa-magnifying-glass"></i></div>
                                </div>
                            </div>
                            <div class="header__right header--modifi header__right--modifi col-xl-5 col-md-5">
                                <a href="" class="header__right-link">
                                    <div class="hr__item hr__item--modifi">
                                        <div class="hr__item-icon">
                                            <i class="fa fa-list-alt"></i>
                                        </div>
                                        <div class="hr__item-name">Đơn hàng</div>
                                    </div>
                                </a>
                                <a href="" class="header__right-link">
                                    <div class="hr__item hr__item--modifi">
                                        <div class="hr__item-icon">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </div>
                                        <div class="hr__item-name">Giỏ hàng</div>
                                    </div>
                                </a>
                                <a href="" class="header__right-link">
                                    <div class="hr__item hr__item--modifi">
                                        <div class="hr__item-icon">
                                            <i class="fa-solid fa-share-nodes"></i>
                                        </div>
                                        <div class="hr__item-name">Chia sẽ</div>
                                    </div>
                                </a>
                                <a href="" class="header__right-link">
                                    <div class="hr__item hr__item--modifi">
                                        <div class="hr__item-icon">
                                            <img src="{{asset('images/endow.png')}}" alt="" class="logo--img">
                                        </div>
                                        <div class="hr__item-name">Ưu đãi</div>
                                    </div>
                                </a>
                                <a href="" class="header__right-link">
                                    <div class="hr__item hr__item--modifi">
                                        <div class="hr__item-icon">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                        <div class="hr__item-name">Tài khoản</div>
                                    </div>
                                </a>
                                <div class="expan-header__right e-g__right--modifi d-flex align-items-center justify-content-end">
                                    <div class="localtion d-flex align-items-center">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span>Đồng nai</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__expand h__e--base align-items-center">
                    <div class="container">
                        <div class="row w-100 h-100">
                            <div class="col-xl-8 col-md-9 expan-header__left e-g__left--modifi">
                                <nav class="navbar navbar-expand h-100">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 text-body" href="{{URL::to('')}}">Trang chủ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 text-body" href="{{URL::to('/gas')}}">Gas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 text-body" href="{{URL::to('/gasoven')}}">Bếp Gas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-2 px-4 text-body" href="#">Phụ kiện</a>
                                        </li>
                                        <li class="nav-item n-i-news-event d-flex align-items-center  position-relative">
                                            <a class="nav-link py-2 px-4 text-body news-event" href="#">
                                                Tin tức - Sự kiện<i class="fa-solid fa-caret-down ms-2"></i>
                                            </a>
                                            <div class="news-event__subnew n-e__subnew--base position-absolute fs-16">
                                                <div class="row">
                                                    <div class="col-xl-5">
                                                        <div class="subnew__title fw-bold pb-1">Tin tức - Sự kiện</div>
                                                        <a class="nav-link px-0 py-1 text-body" href="#">Tin khuyến mãi</a>
                                                        <a class="nav-link px-0 py-1 text-body" href="#">Thị trường Gas</a>
                                                        <a class="nav-link px-0 py-1 text-body" href="#">Sự kiên đại lí</a>
                                                    </div>
                                                    <div class="col-xl-7">
                                                        <div class="subnew__title fw-bold">Cẩm nang Gas</div>
                                                        <a class="nav-link px-0 py-1 text-body" href="#">Kiến thức về gas</a>
                                                        <a class="nav-link px-0 py-1 text-body" href="#">Sử dụng gas an toàn</a>
                                                        <a class="nav-link px-0 py-1 text-body" href="#">Kinh nghiệm hay - Bếp</a>
                                                        <a class="nav-link px-0 py-1 text-body" href="#">Lưu ý về sự dung Gas</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                            <div class="col-xl-4 col-md-3 expan-header__right e-g__right--modifi d-flex align-items-center justify-content-end">
                                <div class="localtion d-flex align-items-center">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>Đồng nai</span>
                                </div>
                                <div class="hostline d-flex align-items-center" title="SĐT: 0982442402">
                                    <i class="fa-solid fa-phone"></i>
                                    <img src="{{asset('images/number-phone.png')}}" alt="" class="number-phone">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="headermobile__expand hm__e--base align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-md-9 expand-headermob__left e-h__left--modifi">
                                <nav class="navbar navbar-expand h-100">
                                    <ul class="navbar-nav d-flex align-items-center justify-content-between w-100">
                                        <li class="nav-item pt-2">
                                            <a class="nav-link text-body flex-column fs-12 d-flex align-items-center" href="#">
                                                <i class="fa-solid fa-house"></i>
                                                <span class="d-block mt-1">Trang chủ</span>
                                            </a>
                                        </li>
                                        <li class="nav-item pt-2">
                                            <a class="nav-link text-body flex-column fs-12 d-flex align-items-center" href="#">
                                                <i class="fa-solid fa-table-cells-large"></i>
                                                <span class="d-block mt-1">Danh mục</span>
                                            </a>
                                        </li>
                                        <li class="nav-item hostline">
                                            <a class="nav-link text-body flex-column fs-12 d-flex align-items-center" href="#">
                                                <i class="fa-solid fa-phone"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item pt-2">
                                            <a class="nav-link text-body flex-column fs-12 d-flex align-items-center" href="#">
                                                <i class="fa fa-list-alt"></i>
                                                <span class="d-block mt-1">Đơn hàng</span>
                                            </a>
                                        </li>
                                        <li class="nav-item pt-2">
                                            <a class="nav-link text-body flex-column fs-12 d-flex align-items-center" href="#">
                                                <i class="fa-solid fa-user"></i>
                                                <span class="d-block mt-1">Tài khoản</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="footer">
            <div class="footer__wrapper footer__wrapper--bg fs-main py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-3 footer__section footer__section--px">
                            <div class="section__title section__title--modifi mb-3 fs-main fw-bold">VỀ GAS QUỲNH LƯU</div>
                            <div class="section__box-link">
                                <a href="" class="d-block nav-link fs-14 my-1">Giới thiệu</a>
                                <a href="" class="d-block nav-link fs-14 my-1">Hệ thống cửa hàng</a>
                                <a href="" class="d-block nav-link fs-14 my-1">Cơ hội nghề nghiệp</a>
                                <div class="d-block nav-link fs-14 my-1">Đại lý thành viên:</div>
                                <div class="box-link__img d-flex">
                                    <div class="img__subbox img__subbox--w">
                                        <img class="w-100" src="{{asset('images/LogoThanhVien-01.png')}}" alt="">
                                    </div>
                                    <div class="img__subbox img__subbox--w">
                                        <img class="w-100" src="{{asset('images/LogoThanhVien-04.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-3 footer__section footer__section--px">
                            <div class="section__title section__title--modifi mb-3 fs-main fw-bold">HỖ TRỢ KHÁCH HÀNG</div>
                            <div class="section__box-link">
                                <a href="" class="d-block nav-link fs-14 my-1">Điều khoản sử dụng</a>
                                <a href="" class="d-block nav-link fs-14 my-1">Câu hỏi thường gặp</a>
                                <a href="" class="d-block nav-link fs-14 my-1">Trung tâm hổ trợ CSKH</a>
                                <a href="" class="d-block nav-link fs-14 my-1">Giới thiệu bạn bè</a>
                                <div class="fs-14">Phương thức thanh toán:</div>
                                <div class="box-link__img d-flex flex-wrap mt-2">
                                    <div class="img__subbox img__subbox--base">
                                        <img class="" src="{{asset('images/visa.png')}}" alt="">
                                    </div>
                                    <div class="img__subbox img__subbox--base">
                                        <img class="" src="{{asset('images/zalopay.png')}}" alt="">
                                    </div>
                                    <div class="img__subbox img__subbox--base">
                                        <img class="" src="{{asset('images/master-card.png')}}" alt="">
                                    </div>
                                    <div class="img__subbox img__subbox--base">
                                        <img class="" src="{{asset('images/cash.png')}}" alt="">
                                    </div>
                                    <div class="img__subbox img__subbox--base">
                                        <img class="" src="{{asset('images/jcb.png')}}" alt="">
                                    </div>
                                    <div class="img__subbox img__subbox--base">
                                        <img class="" src="{{asset('images/momo.png')}}" alt="">
                                    </div>
                                    <div class="img__subbox img__subbox--base">
                                        <img class="" src="{{asset('images/shopeepay.jpg')}}" alt="">
                                    </div>
                                    <div class="img__subbox img__subbox--base">
                                        <img class="" src="{{asset('images/MobileGift.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-3 footer__section footer__section--px">
                            <div class="section__title section__title--modifi mb-3 fs-main fw-bold">CHÍNH SÁCH</div>
                            <div class="section__box-link">
                                <a href="" class="d-block nav-link fs-14 my-1">Chính sách bảo mật</a>
                                <a href="" class="d-block nav-link fs-14 my-1">Chính sách đổi trả</a>
                                <a href="" class="d-block nav-link fs-14 my-1">Chính sách kiểm hàng</a>
                                <a href="" class="d-block nav-link fs-14 my-1">Chính sách vận chuyển và giao nhận</a>
                                <a href="" class="d-block nav-link fs-14 my-1">Chính sách giải quyết khiếu nại</a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-3 footer__section footer__section--px">
                            <div class="section__title section__title--modifi mb-3 fs-main fw-bold">KẾT NỐI VỚI CHÚNG TÔI</div>
                            <div class="section__box-link">
                                <div class="fs-14" href="">Theo dõi Gas Quỳnh Lưu tại:</div>
                                <div class="box-link__img d-flex flex-wrap mt-2">
                                    <div class="img__subbox me-3 fs-14 img__subbox--social img__subbox--bgblue d-flex align-items-center justify-content-between ">
                                        <img class="me-2 rounded-circle" src="{{asset('images/fb.png')}}" alt="">
                                        <span>Facebook</span>
                                    </div>
                                    <div class="img__subbox me-3 fs-14 img__subbox--social img__subbox--bgred d-flex align-items-center justify-content-between ">
                                        <img class="me-2 rounded-circle" src="{{asset('images/youtube.png')}}" alt="">
                                        <span>Youtube</span>
                                    </div>
                                    <div class="img__subbox me-3 fs-14 img__subbox--social d-flex align-items-center justify-content-between ">
                                        <img class="me-2" src="{{asset('images/zalo.png')}}" alt="">
                                        <span>Zalo</span>
                                    </div>
                                </div>
                                <div class="box-link__social"></div>
                                <div class="fs-14">Đăng kí nhận thông tin quá Email:</div>
                                <div class="box-link__register my-1 d-flex align-items-center">
                                    <input type="text">
                                    <button class="btn fs-14 ms-2">Đăng kí</button>
                                </div>
                                <div class="fs-14 ">Tổng đài CSKH: <span class="text-danger fw-bold">0982442402</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright fs-4 text-center d-flex flex-column align-items-center mt-2">Copyright 2022 Đại lý Gas bán lẻ Quỳnh Lưu
                        <img class="w-100 img--mw mt-3" src="{{asset('images/logoSaleNoti.png')}}" alt="">
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>