<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Săn Ship | Tìm kiếm đơn hàng dành cho Shipper | SanShip.VN</title>
  <base href="{{ asset() }}">
  @include('header')
  <style id="css">
    ._2IPv {
      margin: 0
    }

    ._2ths {
      display: inline-block;
      padding: 3px 8px;
      text-decoration: none;
      font-size: 1.125em
    }

    ._2ths,
    ._2ths:active,
    ._2ths:visited {
      color: hsla(0, 0%, 100%, .6)
    }

    ._2ths:hover,
    .z4Yn {
      color: #fff
    }

    .z4Yn {
      margin-right: 8px;
      margin-left: 8px;
      border-radius: 3px;
      background: rgba(0, 0, 0, .15)
    }

    .z4Yn:hover {
      background: rgba(0, 0, 0, .3)
    }

    ._2aPz {
      color: hsla(0, 0%, 100%, .3)
    }
  </style>
  <style type="text/css">
    /*
 * contextMenu.js v 1.4.0
 * Author: Sudhanshu Yadav
 * s-yadav.github.com
 * Copyright (c) 2013 Sudhanshu Yadav.
 * Dual licensed under the MIT and GPL licenses
**/

    .iw-contextMenu {
      box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.10);
      border: 1px solid #c8c7cc;
      border-radius: 11px;
      display: none;
      z-index: 1000000132;
      max-width: 300px;
    }

    .iw-cm-menu {
      background: #fff;
      color: #000;
      margin: 0px;
      padding: 0px;
    }

    .iw-curMenu {}

    .iw-cm-menu li {
      font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, Arial, Ubuntu, sans-serif;
      list-style: none;
      padding: 10px;
      padding-right: 20px;
      border-bottom: 1px solid #c8c7cc;
      cursor: pointer;
      position: relative;
      font-size: 14px;
      margin: 0;
      line-height: inherit;
    }

    .iw-cm-menu li:first-child {
      border-top-left-radius: 11px;
      border-top-right-radius: 11px;
    }

    .iw-cm-menu li:last-child {
      border-bottom-left-radius: 11px;
      border-bottom-right-radius: 11px;
      border-bottom: none;
    }

    .iw-mOverlay {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0px;
      left: 0px;
      background: #FFF;
      opacity: .5;
    }

    .iw-contextMenu li.iw-mDisable {
      opacity: 0.3;
      cursor: default;
    }

    .iw-mSelected {
      background-color: #F6F6F6;
    }

    .iw-cm-arrow-right {
      width: 0;
      height: 0;
      border-top: 5px solid transparent;
      border-bottom: 5px solid transparent;
      border-left: 5px solid #000;
      position: absolute;
      right: 5px;
      top: 50%;
      margin-top: -5px;
    }

    .iw-mSelected>.iw-cm-arrow-right {}

    /*context menu css end */
  </style>
  <style type="text/css">
    @-webkit-keyframes load4 {
      0%,
      100% {
        box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
      }
      12.5% {
        box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
      }
      25% {
        box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
      }
      37.5% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
      }
      50% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
      }
      62.5% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
      }
      75% {
        box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
      }
      87.5% {
        box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
      }
    }

    @keyframes load4 {
      0%,
      100% {
        box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
      }
      12.5% {
        box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
      }
      25% {
        box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
      }
      37.5% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
      }
      50% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
      }
      62.5% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
      }
      75% {
        box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
      }
      87.5% {
        box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
      }
    }
  </style>
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
                <div class="row" data-reactid="5"><a class="logo smooth-scroll" href="https://sanship.vn/" data-reactid="6">Săn Ship</a>
                  <nav class="top-menu" data-reactid="7">
                    <ul class="sf-menu clearfix sf-js-enabled sf-arrows" data-reactid="8" style="touch-action: pan-y;">
                      <li data-reactid="9"><a href="https://sanship.vn/" class="smooth-scroll" title="Trang chủ" data-reactid="10">Trang chủ</a></li>
                      <li data-reactid="11"><a href="https://sanship.vn/intro" class="smooth-scroll" data-reactid="12">Giới thiệu</a></li>
                      <li data-reactid="13"><a href="https://sanship.vn/how-to-use-for-app" class="smooth-scroll root-hdsd" data-reactid="14"> Hướng dẫn Shipper</a></li>
                      <li data-reactid="15"><a href="https://sanship.vn/how-to-use-for-shop" class="smooth-scroll root-hdsd" data-reactid="16"> Hướng dẫn Shop</a></li>
                      <li data-reactid="17"><a href="https://sanship.vn/terms" class="smooth-scroll" title="Điều khoản" data-reactid="18">Điều khoản</a></li>
                    </ul>
                  </nav><a href="#" class="toggle-mnu" data-reactid="19"><span data-reactid="20"></span></a>
                  <div id="mobile-menu" data-reactid="21">
                    <div class="inner-wrap" data-reactid="22">
                      <nav data-reactid="23">
                        <ul class="nav_menu" data-reactid="24">
                          <li data-reactid="25"><a href="https://sanship.vn/" class="smooth-scroll" title="Trang chủ" data-reactid="26">Trang chủ</a></li>
                          <li data-reactid="27"><a href="https://sanship.vn/intro" class="smooth-scroll" data-reactid="28">Giới thiệu</a></li>
                          <li data-reactid="29"><a href="https://sanship.vn/how-to-use-for-app" class="smooth-scroll" data-reactid="30"> Hướng Dẫn Cho Shipper</a></li>
                          <li data-reactid="31"><a href="https://sanship.vn/how-to-use-for-shop" class="smooth-scroll" data-reactid="32"> Hướng Dẫn Cho Shop</a></li>
                          <li data-reactid="33"><a href="https://sanship.vn/terms" class="smooth-scroll" data-reactid="34">Điều Khoản</a></li>
                          <li data-reactid="35"><a href="https://sanship.vn/feeds" class="smooth-scroll" data-reactid="36">Danh Sách Đơn hàng</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </header>
          </div>
          <div data-reactid="37">
            <section class="slider" id="top" data-reactid="38">
              <div class="full-slider slick-initialized slick-slider" data-reactid="39">
                <div aria-live="polite" class="slick-list draggable" style="height: 944px;">
                  <div class="slick-track" style="opacity: 1; width: 1590px;" role="listbox">
                    <div class="slide bg-image canvas-slide slick-slide slick-current slick-active" data-image="img/bg4.jpg" data-reactid="40" data-slick-index="0" aria-hidden="false" style="width: 1590px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1; background-image: url(&quot;img/bg4.jpg&quot;);"
                      tabindex="-1" role="option" aria-describedby="slick-slide00">
                      <div class="container-slide center" data-reactid="41">
                        <div class="container" data-reactid="42">
                          <div class="row" data-reactid="43">
                            <div class="col-md-12 content-mill" data-reactid="44">
                              <div class="content-slide" data-reactid="45">
                                <h1 class="heading-title-big" data-reactid="46"><span data-reactid="47">Tìm Shipper</span><br data-reactid="48"><br data-reactid="49"><!-- react-text: 50 --> Chỉ 30 giây là có Shipper nhận đơn<!-- /react-text --></h1><span class="horizontal-line" data-reactid="51"><span data-reactid="52"></span></span>
                                <div class="description" data-reactid="53">
                                  <p data-reactid="54">Tự do đặt giá Ship, không bị ép giá theo quãng đường. Shipper đến lấy hàng sau 5 đến 10 phút và giao hàng tức thời</p>
                                </div>
                              </div>
                              <div class="buttons-download" data-reactid="55"><a href="https://itunes.apple.com/us/app/san-ship/id1179627110" class="download anim-shadow" data-reactid="56" tabindex="0"><i class="fa fa-apple" aria-hidden="true" data-reactid="57"></i><span data-reactid="58"><span data-reactid="59">Tải trên</span><!-- react-text: 60 -->Apple Store<!-- /react-text --></span></a>
                                <a
                                  href="https://play.google.com/store/apps/details?id=com.sanship.pro" target="_blank" class="download anim-shadow" data-reactid="61" tabindex="0"><i class="fa fa-android" aria-hidden="true" data-reactid="62"></i><span data-reactid="63"><span data-reactid="64">Tải trên</span>
                                  <!-- react-text: 65 -->Google Play
                                  <!-- /react-text -->
                                  </span>
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="particles-js" class="canvas-background" data-reactid="66"><canvas class="pg-canvas" style="display: block;" width="1590" height="944"></canvas></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="control-slider" data-reactid="67">
                <div class="dots-control" id="dots-control-full-slider" data-reactid="68"></div>
                <div class="prev-next" data-reactid="69">
                  <div class="prev slick-arrow slick-hidden" data-reactid="70" aria-disabled="true" tabindex="-1"><i class="pe-7s-angle-left" data-reactid="71"></i></div>
                  <div class="next slick-arrow slick-hidden" data-reactid="72" aria-disabled="true" tabindex="-1"><i class="pe-7s-angle-right" data-reactid="73"></i></div>
                </div>
              </div>
            </section>
            <div data-reactid="74">
              <section class="features" id="features" data-reactid="75">
                <div class="container" data-reactid="76">
                  <div class="row" data-reactid="77">
                    <div class="col-md-8 col-md-push-2" data-reactid="78">
                      <div class="heading-title" data-reactid="79">
                        <h2 data-reactid="80" style="opacity: 1;" class="animated fadeInDown">Giới thiệu</h2>
                        <p data-reactid="81" style="opacity: 1;" class="animated fadeInUp">Săn Ship - Sự lựa chọn tốt nhất của chủ shop và Shiper.</p>
                        <p data-reactid="82" style="opacity: 1;" class="animated fadeInUp">Với các tính năng giúp tương tác tốt nhất giữa chủ Shop bán hàng và Shipper. Không để lỡ bất cứ đơn hàng nào của bạn</p>
                      </div>
                    </div>
                  </div>
                  <div class="row" data-reactid="83">
                    <div class="col-md-3 col-sm-6 col-xs-12 item-icon" data-reactid="84">
                      <div class="icon-container" data-reactid="85">
                        <div class="icon icon-circle" data-reactid="86"><i class="pe-7s-angle-down-circle" data-reactid="87"></i></div>
                      </div>
                      <h3 data-reactid="88">Tổng hợp đơn hàng</h3>
                      <p data-reactid="89">Xem lại lịch sử tất cả đơn hàng mà bạn đã từng đăng tìm Shipper trừ trước đến nay</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 item-icon" data-reactid="90">
                      <div class="icon-container" data-reactid="91">
                        <div class="icon icon-circle" data-reactid="92"><i class="pe-7s-diskette" data-reactid="93"></i></div>
                      </div>
                      <h3 data-reactid="94">Báo Cáo</h3>
                      <p data-reactid="95">Quản lý những đơn hàng.Xuất báo cáo Excel theo ngày, tuần và tháng</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 item-icon" data-reactid="96">
                      <div class="icon-container" data-reactid="97">
                        <div class="icon icon-circle" data-reactid="98"><i class="pe-7s-paper-plane" data-reactid="99"></i></div>
                      </div>
                      <h3 data-reactid="100">Dịch vụ nhanh</h3>
                      <p data-reactid="101">Shipper gần bạn nhất được chọn đến lấy hàng và giao hàng ngay lập tức </p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 item-icon" data-reactid="102">
                      <div class="icon-container" data-reactid="103">
                        <div class="icon icon-circle" data-reactid="104"><i class="pe-7s-comment" data-reactid="105"></i></div>
                      </div>
                      <h3 data-reactid="106">Đền bù</h3>
                      <p data-reactid="107">Săn Ship đền bù 100% giá trị hàng hoá nếu Shipper làm mất hàng của bạn</p>
                    </div>
                  </div>
                </div>
              </section>
              <section class="services" id="services" data-reactid="108">
                <div class="container" data-reactid="109">
                  <div class="row" data-reactid="110">
                    <div class="col-md-8 col-md-push-2" data-reactid="111">
                      <div class="heading-title" data-reactid="112">
                        <h2 data-reactid="113" style="opacity: 1;" class="animated fadeInDown">Dịch vụ của chúng tôi</h2>
                        <p data-reactid="114" style="opacity: 1;" class="animated fadeInUp">Cung cấp giải pháp quản lý đơn hàng toàn diện cho chủ Shop bán hàng và Shipper. Rút ngắn thời gian nhận đơn, giao đơn hàng hàng, đưa ra quãng đường ngắn nhất và nhanh nhất cho Shipper. Tiết kiệm thời gian tìm shipper dành cho chủ
                          shop. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container" data-reactid="115">
                  <div class="row" data-reactid="116">
                    <div class="col-md-4 col-sm-6" data-reactid="117">
                      <div class="items-right" data-reactid="118">
                        <div class="section-class-item" data-reactid="119">
                          <div class="item-text text-left" data-reactid="120">
                            <h3 data-reactid="121">Dịch vụ cung cấp đơn hàng</h3>
                            <p data-reactid="122">Cung cấp tất cả đơn hàng trên một màn hình dành cho Shipper</p>
                          </div>
                          <div class="item-icon text-left" data-reactid="123"><span class="icon-wrap icon-services" data-reactid="124"><i class="pe-7s-map-marker" data-reactid="125"></i></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-reactid="126">
                      <div class="section-class-image text-center" data-reactid="127"><img class="inamauee animated fadeInUp" src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/blue.png" alt="iPhone" data-reactid="128" style="opacity: 1;"></div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-reactid="129">
                      <div class="items-left" data-reactid="130">
                        <div class="section-class-item" data-reactid="131">
                          <div class="item-icon text-right" data-reactid="132"><span class="icon-wrap icon-services" data-reactid="133"><i class="pe-7s-note2" data-reactid="134"></i></span></div>
                          <div class="item-text text-right" data-reactid="135">
                            <h3 data-reactid="136">Dịch vụ quản lý đơn hàng</h3>
                            <p data-reactid="137">Quản lý và thống kê danh sách đơn hàng đã giao cho Shipper</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container-background" data-reactid="138">
                  <div class="container" data-reactid="139">
                    <div class="row" data-reactid="140">
                      <div class="col-md-4 col-sm-6" data-reactid="141">
                        <div class="items-left with-bg-section" data-reactid="142">
                          <div class="section-class-item" data-reactid="143">
                            <div class="item-icon text-right" data-reactid="144"><span class="icon-wrap" data-reactid="145"><i class="pe-7s-cloud-download" data-reactid="146"></i></span></div>
                            <div class="item-text text-right" data-reactid="147">
                              <h3 data-reactid="148"><span data-reactid="149">Đã có 100.000+ </span><!-- react-text: 150 --> cài đặt<!-- /react-text --></h3></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-md-push-4" data-reactid="151">
                        <div class="items-right bg-right with-bg-section" data-reactid="152">
                          <div class="section-class-item" data-reactid="153">
                            <div class="item-text text-left" data-reactid="154">
                              <h3 data-reactid="155"><!-- react-text: 156 -->Đơn giản  <!-- /react-text --><span data-reactid="157">hiệu quả</span></h3></div>
                            <div class="item-icon text-left" data-reactid="158"><span class="icon-wrap" data-reactid="159"><i class="pe-7s-piggy" data-reactid="160"></i></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container" data-reactid="161">
                  <div class="row" data-reactid="162">
                    <div class="col-md-4 col-sm-6" data-reactid="163">
                      <div class="items-right" data-reactid="164">
                        <div class="section-class-item" data-reactid="165">
                          <div class="item-text text-left" data-reactid="166">
                            <h3 data-reactid="167">Quản lý danh sách shop ruột</h3>
                            <p data-reactid="168">Quản lý danh sách shop ruột, ship ruột để tiện cho việc chăm sóc</p>
                          </div>
                          <div class="item-icon text-left" data-reactid="169"><span class="icon-wrap icon-services" data-reactid="170"><i class="pe-7s-users" data-reactid="171"></i></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-md-push-4" data-reactid="172">
                      <div class="items-left" data-reactid="173">
                        <div class="section-class-item" data-reactid="174">
                          <div class="item-icon text-left" data-reactid="175"><span class="icon-wrap icon-services" data-reactid="176"><i class="pe-7s-bicycle" data-reactid="177"></i></span></div>
                          <div class="item-text text-right" data-reactid="178">
                            <h3 data-reactid="179">Dịch vụ tìm shipper nhanh</h3>
                            <p data-reactid="180"> Tạo đơn hàng tìm Shipper nhanh nhất</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <section class="benefits" data-reactid="181">
              <div class="container" data-reactid="182">
                <div class="row" data-reactid="183">
                  <div class="col-md-8 col-md-push-2" data-reactid="184">
                    <div class="heading-title" data-reactid="185">
                      <h2 data-reactid="186" style="opacity: 1;" class="animated fadeInDown">Lợi ích mà Săn Ship đem lại</h2>
                      <p data-reactid="187" style="opacity: 1;" class="animated fadeInUp">Tổng hợp nhiều đơn hàng cùng một lúc. Nhanh hơn hiệu quả hơn. Tương tác với chủ shop tốt hơn. Đưa ra khoảng cách di chuyển chính xác hơn. Tiết kiệm thời gian hơn</p>
                    </div>
                  </div>
                </div>
                <div class="row" data-reactid="188">
                  <div class="col-md-4 col-md-push-8" data-reactid="189">
                    <div class="iphone-nalf animated fadeInUp" data-reactid="190" style="opacity: 1;"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/blue.png" alt="iphone" data-reactid="191"></div>
                  </div>
                  <div class="col-md-4 col-md-pull-4 col-sm-6 col-xs-12" data-reactid="192">
                    <div class="section-className-item icon-circle-border" data-reactid="193">
                      <div class="item-icon" data-reactid="194"><span class="icon-wrap icon-services" data-reactid="195"><i class="pe-7s-monitor" data-reactid="196"></i></span></div>
                      <div class="item-text text-left" data-reactid="197">
                        <h3 data-reactid="198">Hỗ trợ trên mọi thiết bị</h3>
                        <p data-reactid="199">Giúp bạn tổng hợp đơn hàng ở mọi lúc mọi nơi, hỗ trợ trên mọi thiết bị.</p>
                      </div>
                    </div>
                    <div class="section-className-item icon-circle-border" data-reactid="200">
                      <div class="item-icon" data-reactid="201"><span class="icon-wrap icon-services" data-reactid="202"><i class="pe-7s-mouse" data-reactid="203"></i></span></div>
                      <div class="item-text text-left" data-reactid="204">
                        <h3 data-reactid="205">Đơn giản dễ sử dụng</h3>
                        <p data-reactid="206">Tất cả các thao tác nhận và trả lời đơn hàng chỉ bằng một click</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-md-pull-4 col-sm-6 col-xs-12" data-reactid="207">
                    <div class="section-className-item icon-circle-border" data-reactid="208">
                      <div class="item-icon" data-reactid="209"><span class="icon-wrap icon-services" data-reactid="210"><i class="pe-7s-light" data-reactid="211"></i></span></div>
                      <div class="item-text text-left" data-reactid="212">
                        <h3 data-reactid="213">Thiết kế hoàn hảo</h3>
                        <p data-reactid="214">Tinh tế và hướng đến người sử dụng</p>
                      </div>
                    </div>
                    <div class="section-className-item icon-circle-border" data-reactid="215">
                      <div class="item-icon" data-reactid="216"><span class="icon-wrap icon-services" data-reactid="217"><i class="pe-7s-keypad" data-reactid="218"></i></span></div>
                      <div class="item-text text-left" data-reactid="219">
                        <h3 data-reactid="220">Thiết kế thân thiện</h3>
                        <p data-reactid="221">Phù hợp với shipper ngay cả khi đang đi trên đường</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="testimonials white-color bg-mask triangle" id="customers" data-reactid="222">
              <div class="container" data-reactid="223">
                <div class="row" data-reactid="224">
                  <div class="col-md-8 col-md-push-2" data-reactid="225">
                    <div class="heading-title" data-reactid="226">
                      <h2 data-reactid="227" style="opacity: 1;" class="animated fadeInDown">Đánh giá từ khách hàng</h2>
                      <p data-reactid="228" style="opacity: 1;" class="animated fadeInUp">Những đánh giá thiết thực từ những trải nghiệm của người sử dụng. Những người đã đồng hành cùng San Ship trong suốt thời gian qua.</p>
                    </div>
                  </div>
                </div>
                <div class="row" data-reactid="229">
                  <div class="container-carousel" data-reactid="230">
                    <div class="testimonials-items slick-initialized slick-slider slick-dotted" data-reactid="231">
                      <div aria-live="polite" class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 4290px; transform: translate3d(-1560px, 0px, 0px); transition: transform 500ms ease 0s;" role="listbox">
                          <div class="col-md-4 slick-slide slick-cloned" data-reactid="242" data-slick-index="-3" aria-hidden="true" style="width: 390px;" tabindex="-1">
                            <div class="item-testimonials" data-reactid="243"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/ava3.jpg" alt="photo" data-reactid="244">
                              <p data-reactid="245">Lấy đơn hàng nhanh, thích nhất chức năng gọi ngay và chức năng SMS. Từ khi dùng App và web đơn hàng tăng lên mỗi ngày</p><span data-reactid="246">Phạm Văn Khắc</span></div>
                          </div>
                          <div class="col-md-4 slick-slide slick-cloned" data-reactid="247" data-slick-index="-2" aria-hidden="true" style="width: 390px;" tabindex="-1">
                            <div class="item-testimonials" data-reactid="248"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/ava4.jpg" alt="photo" data-reactid="249">
                              <p data-reactid="250">Mình là chủ shop. Mình sử dụng săn ship để tìm shipper nhanh hơn. Mình thích nhất chức năng đăng bài của APP. Chỉ cần đăng một lần nhưng lại đăng được lên tất cả các group mình muốn</p><span data-reactid="251">Bảo Ngọc</span></div>
                          </div>
                          <div class="col-md-4 slick-slide slick-cloned" data-reactid="252" data-slick-index="-1" aria-hidden="true" style="width: 390px;" tabindex="-1">
                            <div class="item-testimonials" data-reactid="253"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/ava5.jpg" alt="photo" data-reactid="254">
                              <p data-reactid="255">Tuyệt vời, từ lúc sử dụng App đơn hàng tăng lên nhiều. Ngoài ra quản lý doanh thu theo ngày cũng tốt</p><span data-reactid="256">Phạm Lan Anh</span></div>
                          </div>
                          <div class="col-md-4 slick-slide" data-reactid="232" data-slick-index="0" aria-hidden="true" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide10">
                            <div class="item-testimonials" data-reactid="233"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/ava.jpg" alt="photo" data-reactid="234">
                              <p data-reactid="235">Cảm thấy hài lòng. Nhưng mong là có ứng dụng cho cả window phone nữa thì tuyệt vời. Mong ngày càng nhiều chức năng hay hơn</p><span data-reactid="236">Phạm Thư</span></div>
                          </div>
                          <div class="col-md-4 slick-slide slick-current slick-active" data-reactid="237" data-slick-index="1" aria-hidden="false" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide11">
                            <div class="item-testimonials" data-reactid="238"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/ava2.jpg" alt="photo" data-reactid="239">
                              <p data-reactid="240">Mình mở văn phòng ship. Nếu không có ứng này, không biết bên mình tổng hợp đơn hàng thế nào nữa. Cảm ơn các bạn đã làm ra ứng dụng này</p><span data-reactid="241">Nguyễn Mạnh Quân</span></div>
                          </div>
                          <div class="col-md-4 slick-slide slick-active" data-reactid="242" data-slick-index="2" aria-hidden="false" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide12">
                            <div class="item-testimonials" data-reactid="243"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/ava3.jpg" alt="photo" data-reactid="244">
                              <p data-reactid="245">Lấy đơn hàng nhanh, thích nhất chức năng gọi ngay và chức năng SMS. Từ khi dùng App và web đơn hàng tăng lên mỗi ngày</p><span data-reactid="246">Phạm Văn Khắc</span></div>
                          </div>
                          <div class="col-md-4 slick-slide slick-active" data-reactid="247" data-slick-index="3" aria-hidden="false" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide13">
                            <div class="item-testimonials" data-reactid="248"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/ava4.jpg" alt="photo" data-reactid="249">
                              <p data-reactid="250">Mình là chủ shop. Mình sử dụng săn ship để tìm shipper nhanh hơn. Mình thích nhất chức năng đăng bài của APP. Chỉ cần đăng một lần nhưng lại đăng được lên tất cả các group mình muốn</p><span data-reactid="251">Bảo Ngọc</span></div>
                          </div>
                          <div class="col-md-4 slick-slide" data-reactid="252" data-slick-index="4" aria-hidden="true" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide14">
                            <div class="item-testimonials" data-reactid="253"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/ava5.jpg" alt="photo" data-reactid="254">
                              <p data-reactid="255">Tuyệt vời, từ lúc sử dụng App đơn hàng tăng lên nhiều. Ngoài ra quản lý doanh thu theo ngày cũng tốt</p><span data-reactid="256">Phạm Lan Anh</span></div>
                          </div>
                          <div class="col-md-4 slick-slide slick-cloned" data-reactid="232" data-slick-index="5" aria-hidden="true" style="width: 390px;" tabindex="-1">
                            <div class="item-testimonials" data-reactid="233"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/ava.jpg" alt="photo" data-reactid="234">
                              <p data-reactid="235">Cảm thấy hài lòng. Nhưng mong là có ứng dụng cho cả window phone nữa thì tuyệt vời. Mong ngày càng nhiều chức năng hay hơn</p><span data-reactid="236">Phạm Thư</span></div>
                          </div>
                          <div class="col-md-4 slick-slide slick-cloned" data-reactid="237" data-slick-index="6" aria-hidden="true" style="width: 390px;" tabindex="-1">
                            <div class="item-testimonials" data-reactid="238"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/ava2.jpg" alt="photo" data-reactid="239">
                              <p data-reactid="240">Mình mở văn phòng ship. Nếu không có ứng này, không biết bên mình tổng hợp đơn hàng thế nào nữa. Cảm ơn các bạn đã làm ra ứng dụng này</p><span data-reactid="241">Nguyễn Mạnh Quân</span></div>
                          </div>
                          <div class="col-md-4 slick-slide slick-cloned" data-reactid="242" data-slick-index="7" aria-hidden="true" style="width: 390px;" tabindex="-1">
                            <div class="item-testimonials" data-reactid="243"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/ava3.jpg" alt="photo" data-reactid="244">
                              <p data-reactid="245">Lấy đơn hàng nhanh, thích nhất chức năng gọi ngay và chức năng SMS. Từ khi dùng App và web đơn hàng tăng lên mỗi ngày</p><span data-reactid="246">Phạm Văn Khắc</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="prev-next-block" id="control-testimonials" data-reactid="257">
                      <div class="prev slick-arrow" data-reactid="258" aria-disabled="true" style="display: block;"><i class="pe-7s-angle-left" data-reactid="259"></i></div>
                      <div class="next slick-arrow" data-reactid="260" aria-disabled="true" style="display: block;"><i class="pe-7s-angle-right" data-reactid="261"></i></div>
                    </div>
                  </div>
                  <div class="dots-screenshot" id="dots-control-testimonials" data-reactid="262" role="toolbar">
                    <ul class="dots" style="display: inline-block;" role="tablist">
                      <li class="" aria-hidden="true" role="presentation" aria-selected="true" aria-controls="navigation10" id="slick-slide10"><button type="button" data-role="none" role="button" tabindex="0">1</button></li>
                      <li aria-hidden="false" role="presentation" aria-selected="false" aria-controls="navigation11" id="slick-slide11" class="slick-active"><button type="button" data-role="none" role="button" tabindex="0">2</button></li>
                      <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation12" id="slick-slide12" class=""><button type="button" data-role="none" role="button" tabindex="0">3</button></li>
                      <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation13" id="slick-slide13" class=""><button type="button" data-role="none" role="button" tabindex="0">4</button></li>
                      <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation14" id="slick-slide14" class=""><button type="button" data-role="none" role="button" tabindex="0">5</button></li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
            <section class="what-did" data-reactid="263">
              <div class="container" data-reactid="264">
                <div class="row" data-reactid="265">
                  <div class="col-md-5" data-reactid="266">
                    <div class="iphones-section" data-reactid="267">
                      <div class="iphones" data-reactid="268"><img class="left-mob-front" src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/Iphone-mob-front.png" alt="iphone" data-reactid="269"><img class="left-mob-back animated fadeInUp"
                          src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/Iphone-mob-back.png" alt="iphone" data-reactid="270" style="opacity: 1;"></div>
                    </div>
                  </div>
                  <div class="col-md-6 col-md-push-1" data-reactid="271">
                    <div class="heading-title text-left" data-reactid="272">
                      <h2 data-reactid="273" style="opacity: 1;" class="animated fadeInDown">Những lý do nên sử dụng Săn Ship</h2>
                      <p data-reactid="274" style="opacity: 1;" class="animated fadeInUp">Tiện lợi, nhanh chóng, hiệu quả và tiết kiệm.</p>
                    </div>
                    <div class="section-icon-text text-with-icon" data-reactid="275">
                      <div class="section-className-item" data-reactid="276">
                        <div class="item-icon" data-reactid="277"><span class="icon-wrap" data-reactid="278"><i class="pe-7s-check" data-reactid="279"></i></span></div>
                        <div class="item-text text-left" data-reactid="280">
                          <p data-reactid="281">Tất cả các đơn hàng được tổng trên một màn hình duy nhất</p>
                        </div>
                      </div>
                    </div>
                    <div class="section-icon-text text-with-icon" data-reactid="282">
                      <div class="section-className-item" data-reactid="283">
                        <div class="item-icon" data-reactid="284"><span class="icon-wrap" data-reactid="285"><i class="pe-7s-check" data-reactid="286"></i></span></div>
                        <div class="item-text text-left" data-reactid="287">
                          <p data-reactid="288">Gọi điện ngay cho người tạo đơn hàng chỉ với một click</p>
                        </div>
                      </div>
                    </div>
                    <div class="section-icon-text text-with-icon" data-reactid="289">
                      <div class="section-className-item" data-reactid="290">
                        <div class="item-icon" data-reactid="291"><span class="icon-wrap" data-reactid="292"><i class="pe-7s-check" data-reactid="293"></i></span></div>
                        <div class="item-text text-left" data-reactid="294">
                          <p data-reactid="295">Thời gian có đơn hàng mới không quá 3 giây</p>
                        </div>
                      </div>
                    </div>
                    <div class="section-icon-text text-with-icon" data-reactid="296">
                      <div class="section-className-item" data-reactid="297">
                        <div class="item-icon" data-reactid="298"><span class="icon-wrap" data-reactid="299"><i class="pe-7s-check" data-reactid="300"></i></span></div>
                        <div class="item-text text-left" data-reactid="301">
                          <p data-reactid="302">Dữ liệu được lấy từ tất cả các shop trên toàn quốc và cập nhật liên tục</p>
                        </div>
                      </div>
                    </div>
                    <div class="section-icon-text text-with-icon" data-reactid="303">
                      <div class="section-className-item" data-reactid="304">
                        <div class="item-icon" data-reactid="305"><span class="icon-wrap" data-reactid="306"><i class="pe-7s-check" data-reactid="307"></i></span></div>
                        <div class="item-text text-left" data-reactid="308">
                          <p data-reactid="309">Tương tác với các mạng xã hội và các group lớn nhanh nhất</p>
                        </div>
                      </div>
                    </div>
                    <div class="section-icon-text text-with-icon" data-reactid="310">
                      <div class="section-className-item" data-reactid="311">
                        <div class="item-icon" data-reactid="312"><span class="icon-wrap" data-reactid="313"><i class="pe-7s-check" data-reactid="314"></i></span></div>
                        <div class="item-text text-left" data-reactid="315">
                          <p data-reactid="316">Đội ngũ kỹ thuật hỗ trợ 24/7</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
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
                      <div class="buttons-download text-center" data-reactid="331"><a href="https://itunes.apple.com/us/app/san-ship/id1179627110" class="download anim-shadow" data-reactid="332"><i class="fa fa-apple" aria-hidden="true" data-reactid="333"></i><span data-reactid="334"><span data-reactid="335">Tải trên</span><!-- react-text: 336 -->Apple Store<!-- /react-text --></span></a>
                        <a
                          href="https://play.google.com/store/apps/details?id=com.sanship.pro" target="_blank" class="download anim-shadow" data-reactid="337"><i class="fa fa-android" aria-hidden="true" data-reactid="338"></i><span data-reactid="339"><span data-reactid="340">Tải trên</span>
                          <!-- react-text: 341 -->Google Play
                          <!-- /react-text -->
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
                          <li class="icon-circle" data-reactid="351"><a href="#" data-reactid="352"><i class="fa fa-facebook" aria-hidden="true" data-reactid="353"></i></a></li>
                          <li class="icon-circle" data-reactid="354"><a href="#" data-reactid="355"><i class="fa fa-twitter" aria-hidden="true" data-reactid="356"></i></a></li>
                          <li class="icon-circle" data-reactid="357"><a href="#" data-reactid="358"><i class="fa fa-dribbble" aria-hidden="true" data-reactid="359"></i></a></li>
                          <li class="icon-circle" data-reactid="360"><a href="#" data-reactid="361"><i class="fa fa-google-plus" aria-hidden="true" data-reactid="362"></i></a></li>
                          <li class="icon-circle" data-reactid="363"><a href="#" data-reactid="364"><i class="fa fa-youtube" aria-hidden="true" data-reactid="365"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row" data-reactid="366">
                    <div class="bottom-footer white-color" data-reactid="367">
                      <div class="col-md-8" data-reactid="368">
                        <div class="footer-copyright" data-reactid="369">
                          <p data-reactid="370">Công ty Cổ phần React Connecting © 2016 All Rights Reserved.</p>
                          <p data-reactid="371">Giấy CNĐKDN Số 0107763357 do Sở KH và ĐT TP.HN cấp ngày 16/03/2017, cấp đổi lần 1 ngày 25/04/2017</p>
                          <p data-reactid="372">Liên hệ : 1900.633.689</p>
                          <p data-reactid="373">Email: support@sanship.vn</p>
                          <p data-reactid="374">Chịu trách nhiệm nội dung ông: Phạm Thế Anh</p>
                        </div>
                      </div>
                      <div class="col-md-2" data-reactid="375">
                        <div class="footer-copyright" data-reactid="376"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/bct.png" data-reactid="377" width="200px"></div>
                      </div>
                      <div class="col-md-2" data-reactid="378">
                        <div class="footer-copyright" data-reactid="379"><img src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/dathongbaobct.png" data-reactid="380" width="200px"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
              <div class="top icon-down toTopFromBottom" data-reactid="381" style="display: block;"><a href="#top" class="smooth-scroll" data-reactid="382"><i class="pe-7s-angle-up" data-reactid="383"></i></a></div>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </div>
  <script async="" src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/analytics.js"></script>
  <script src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/main.html"></script>
  <script src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/jquery-1.js"></script>
  <script src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/libs.js"></script>
  <script src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/common.js"></script>
  <script src="S%C4%83n%20Ship%20|%20T%C3%ACm%20ki%E1%BA%BFm%20%C4%91%C6%A1n%20h%C3%A0ng%20d%C3%A0nh%20cho%20Shipper%20|%20SanShip.VN_files/tracking.js"></script>
</body>

</html>
