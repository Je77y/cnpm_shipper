<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Săn Ship | Tìm kiếm đơn hàng dành cho Shipper </title>
  <base href="{{ asset('') }}" >
  @include('fontend/base/header')
  
  <style type="text/css">
    /* This is not a zero-length file! */
  </style>
</head>

<body class="page contact-page  pace-done">
  <div class="pace  pace-inactive">
    <div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
      <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
  </div>
  <div id="app">
    <div>
      <div data-reactroot="" data-reactid="1" data-react-checksum="878447138">
        <div data-reactid="2">
          <div id="top-nav-sticky-wrapper" class="sticky-wrapper is-sticky" style="height: 58px;">
            <header id="top-nav" data-reactid="3" style="width: 1590px; position: fixed; top: 0px; z-index: 40;">
              <div class="container" data-reactid="4">
                <div class="row" data-reactid="5"><a class="logo smooth-scroll" href="" data-reactid="6">Săn Ship</a>
                  <nav class="top-menu" data-reactid="7">
                    <ul class="sf-menu clearfix sf-js-enabled sf-arrows" data-reactid="8" style="touch-action: pan-y;">
                      <li data-reactid="9"><a href="{{ route('index') }}" class="smooth-scroll" title="Trang chủ" data-reactid="10">Trang chủ</a></li>
                      <li data-reactid="11"><a href="{{ route('about') }}" class="smooth-scroll" data-reactid="12">Giới thiệu</a></li>
                      <li data-reactid="13"><a href="" class="smooth-scroll root-hdsd" data-reactid="14"> Hướng dẫn Shipper</a></li>
                      <li data-reactid="15"><a href="" class="smooth-scroll root-hdsd" data-reactid="16"> Hướng dẫn Shop</a></li>
                      <li data-reactid="17"><a href="{{ route('provision') }}" class="smooth-scroll" title="Điều khoản" data-reactid="18">Điều khoản</a></li>
                    </ul>
                  </nav><a href="#" class="toggle-mnu" data-reactid="19"><span data-reactid="20"></span></a>
                  <div id="mobile-menu" data-reactid="21">
                    <div class="inner-wrap" data-reactid="22">
                      <nav data-reactid="23">
                        <ul class="nav_menu" data-reactid="24">
                          <li data-reactid="25"><a href="" class="smooth-scroll" title="Trang chủ" data-reactid="26">Trang chủ</a></li>
                          <li data-reactid="27"><a href="intro" class="smooth-scroll" data-reactid="28">Giới thiệu</a></li>
                          <li data-reactid="29"><a href="how-to-use-for-app" class="smooth-scroll" data-reactid="30"> Hướng Dẫn Cho Shipper</a></li>
                          <li data-reactid="31"><a href="how-to-use-for-shop" class="smooth-scroll" data-reactid="32"> Hướng Dẫn Cho Shop</a></li>
                          <li data-reactid="33"><a href="terms" class="smooth-scroll" data-reactid="34">Điều Khoản</a></li>
                          <li data-reactid="35"><a href="feeds" class="smooth-scroll" data-reactid="36">Danh Sách Đơn hàng</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </header>
          </div>
          @yield('content')
          <div class="s-alert-wrapper" data-reactid="317"></div>
          <footer data-reactid="318">
            <div data-reactid="319">
              <section class="downloads bg-mask white-color" data-reactid="320">
                <div class="container" data-reactid="321">
                  <div class="row" data-reactid="322">
                    <div class="col-md-8 col-md-push-2" data-reactid="323">
                      <div class="heading-title" data-reactid="324">
                        <h2 data-reactid="325" style="opacity: 1;" class="animated fadeInDown"><!-- react-text: 326 -->Tải ứng dụng <!-- /react-text --><span data-reactid="327">Săn Ship</span><!-- react-text: 328 --> ngay hôm nay!<!-- /react-text --></h2>
                        <p data-reactid="329" style="opacity: 1;" class="animated fadeInUp">Còn chần chờ gì, hãy tải ngay ứng dụng Săn Ship cho điện thoại của bạn để trải nghiệm tính năng tạo đơn hàng cho Shop và tìm đơn hàng cho Shipper.</p>
                      </div>
                    </div>
                    <div class="col-md-12" data-reactid="330">
                      <div class="buttons-download text-center" data-reactid="331"><a href="https://itunes.apple.com/us/app/san-ship/id1179627110" class="download anim-shadow" data-reactid="332"><i class="fas fa-sign-in-alt"></i><span data-reactid="334"><span data-reactid="335">Đăng ký</span>Tài khoản</span></a>
                        <a
                          href="https://play.google.com/store/apps/details?id=com.sanship.pro" target="_blank" class="download anim-shadow" data-reactid="337"><i class="fas fa-sign-out-alt"></i><span data-reactid="339"><span data-reactid="340">Đăng nhập</span>
                          Hệ thống
                          </span>
                          </a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <footer data-reactid="342">
                <div class="container" data-reactid="343">
                  <div class="row" data-reactid="344">
                    <div class="col-md-12" data-reactid="345">
                      <div class="heading-title" data-reactid="346">
                        <h2 data-reactid="347" style="opacity: 1;" class="animated fadeInDown"><span data-reactid="348">Săn Ship</span></h2></div>
                      <div class="social-inons" data-reactid="349">
                        <ul data-reactid="350">
                          <li class="icon-circle" data-reactid="351"><a href="#" data-reactid="352"><i class="fab fa-facebook-f"></i></a></li>
                          <li class="icon-circle" data-reactid="354"><a href="#" data-reactid="355"><i class="fab fa-twitter"></i></a></li>
                          <li class="icon-circle" data-reactid="357"><a href="#" data-reactid="358"><i class="fab fa-dribbble"></i></a></li>
                          <li class="icon-circle" data-reactid="360"><a href="#" data-reactid="361"><i class="fab fa-google-plus-g"></i></a></li>
                          <li class="icon-circle" data-reactid="363"><a href="#" data-reactid="364"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row" data-reactid="366">
                    <div class="bottom-footer white-color" data-reactid="367">
                      <div class="col-md-8" data-reactid="368">
                        <div class="footer-copyright" data-reactid="369">
                          <p data-reactid="370">Công ty KuonVu © 2016 All Rights Reserved.</p>
                          <p data-reactid="371">Giấy CNĐKDN Số 0107763357 do Sở KH và ĐT TP.HN cấp ngày 16/03/2017, cấp đổi lần 1 ngày 25/04/2017</p>
                          <p data-reactid="372">Liên hệ : 1900.633.689</p>
                          <p data-reactid="373">Email: support@sanship.vn</p>
                          <p data-reactid="374">Chịu trách nhiệm nội dung ông: Vu Hung Cuong</p>
                        </div>
                      </div>
                      <div class="col-md-2" data-reactid="375">
                        <div class="footer-copyright" data-reactid="376"><img src="fontend/imgs/bct.png" data-reactid="377" width="200px"></div>
                      </div>
                      <div class="col-md-2" data-reactid="378">
                        <div class="footer-copyright" data-reactid="379"><img src="fontend/imgs/dathongbaobct.png" data-reactid="380" width="200px"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
              <div class="top icon-down toTopFromBottom" data-reactid="381" style="display: block;"><a href="#top" class="smooth-scroll" data-reactid="382"><i class="fas fa-angle-up"></i>
              </a></div>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </div>
  <script async="" src="fontend/js/analytics.js"></script>
  <script src="fontend/js/jquery-1.js"></script>
  <script src="fontend/js/libs.js"></script>
  <script src="fontend/js/common.js"></script>
  <script src="fontend/js/tracking.js"></script>
</body>

</html>
