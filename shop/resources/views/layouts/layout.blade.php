<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/mobile.css') }}" media="screen and (max-width: 660px)">
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('asset/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css') }}">

    <script src="{{ asset('asset/js/slideshow.js') }}"></script>
    <script src="{{ asset('asset/js/triagledown.js') }}"></script>
    <script src="{{ asset('asset/js/heart_like.js') }}"></script>

    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

    <div class="loading-overplay" style="display: none">
        <div class="text-box">
            <div class="text1">
                hello
            </div>
        </div>
    </div>

    <div class="app">

        @include('elements.top')

        <div class="app__container">
            <div class="grid">
                <!--/slider-->
                @include('elements.slide')

                <!-- Grid body nội dung -->

                <div class="app__container-2">
                    <div class="grid__row">
                        <div class="category-section">
                            @include('elements.category')
                        </div>

                        {{-- Brand --}}
                        <div class="containerT">
                            @include('elements.brand')
                        </div>

                        <div class="grid__column-2">
                            @include('elements.slidebar')
                        </div>
                        {{-- <div class="grid__column-10">
                            @include('elements.home_filter')
                        </div> --}}
                        <div class="grid__column-10">
                            {{-- @include('elements.home_filter') --}}
                            @yield('content')
                        </div>
                       
                    </div>

                </div>

                @include('elements.footer')
            </div>

             <!-- MODAL layout -->
    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">         
                <!-- Register Form -->
             <div class="auth-form auth-form__register">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <span class="auth-form__switch-btn auth-form__btn-login">Đăng Nhập</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Email của bạn">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Mật khẩu của bạn">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng kí, bạn đã đồng ý với Shopee về
                            <a href="" class="auth-form__text-link">Điều khoản dịch vụ </a>&
                            <a href="" class="auth-form__text-link">Chính sách bảo mật </a>
                        </p>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn btn--nomar auth-form__controls-back ">TRỞ LẠI</button>
                        <button class="btn btn--primary">Đăng ký</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="btn btn_size_s auth-form__socials--facebook  btn--width-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                            <span class="auth-form__socials-title">
                                Kết nối với Facebook
                            </span>
                    </a>

                    <a href="" class="btn btn_size_s auth-form__socials--google  btn--width-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
            </div> 

              <!-- Login form -->
            <div class="auth-form auth-form__login">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <span class="auth-form__switch-btn auth-form__btn-register">Đăng Ký</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Email của bạn">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Mật khẩu của bạn">
                        </div>
                     
                    </div>

                    <div class="auth-form__aside">
                       <div class="auth-form__help">
                        <a href="" class="auth-form__link auth-form__help-forgot ">Quên mật khẩu</a>
                        <span class="auth-form__helf-separate"></span>
                        <a href="" class="auth-form__link">Cần trợ giúp?</a>
                       </div>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn btn--nomar auth-form__controls-back ">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="btn btn_size_s auth-form__socials--facebook  btn--width-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                            <span class="auth-form__socials-title">
                                Kết nối với Facebook
                            </span>
                    </a>

                    <a href="" class="btn btn_size_s auth-form__socials--google  btn--width-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="modal_mobile">
        <nav class="category category__mobile">
            <h3 class="category__heading">
                <i class="category__heading-icon fa-solid fa-list"></i>
                Danh mục</h3>
            <ul class="category-list">
                <li class="category-item category-item--active">
                    <a href="#" class="category-item__link">Đồng hồ</a>
                </li>
                <li class="category-item">
                    <a href="#" class="category-item__link">Giày</a>
                </li>
                <li class="category-item">
                    <a href="#" class="category-item__link">Áo</a>
                </li>
            </ul>

            <ul class="select-lable">
                <li>Trong shop <i class="fa-solid fa-check"></i></li>
                <li>Ngoài shop</li>
            </ul>


            <div class="btn_back">
                <button class="btn btn--primary">Trở lại</button>
            </div>
        </nav>      
    </div>

    <div class="modal modal__layout-mobile">
        <div class="modal__overlay"></div>
        <div class="modal__body">         
                <!-- Register Form -->
             <div class="auth-form auth-form__register">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <span class="auth-form__switch-btn auth-form__btn-login">Đăng Nhập</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Email của bạn">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Mật khẩu của bạn">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng kí, bạn đã đồng ý với Shopee về
                            <a href="" class="auth-form__text-link">Điều khoản dịch vụ </a>&
                            <a href="" class="auth-form__text-link">Chính sách bảo mật </a>
                        </p>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn btn--nomar auth-form__controls-back ">TRỞ LẠI</button>
                        <button class="btn btn--primary">Đăng ký</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="btn btn_size_s auth-form__socials--facebook  btn--width-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                            <span class="auth-form__socials-title">
                                Facebook
                            </span>
                    </a>

                    <a href="" class="btn btn_size_s auth-form__socials--google  btn--width-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <span class="auth-form__socials-title">
                            Google
                        </span>
                    </a>
                </div>
            </div> 

              <!-- Login form -->
            <div class="auth-form auth-form__login">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <span class="auth-form__switch-btn auth-form__btn-register">Đăng Ký</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Email của bạn">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Mật khẩu của bạn">
                        </div>
                     
                    </div>

                    <div class="auth-form__aside">
                       <div class="auth-form__help">
                        <a href="" class="auth-form__link auth-form__help-forgot ">Quên mật khẩu</a>
                        <span class="auth-form__helf-separate"></span>
                        <a href="" class="auth-form__link">Cần trợ giúp?</a>
                       </div>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn btn--nomar auth-form__controls-back ">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="btn btn_size_s auth-form__socials--facebook  btn--width-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                            <span class="auth-form__socials-title">
                             Facebook
                            </span>
                    </a>

                    <a href="" class="btn btn_size_s auth-form__socials--google  btn--width-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <span class="auth-form__socials-title">
                            Google
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('asset/js/index.js')}}"></script>
    <script src="{{ asset('asset/js/category.js') }}"></script>

    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
