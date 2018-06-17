@extends('fontend.base.layout') @section('content')
<div data-reactid="37">
  <section class="slider" id="top" data-reactid="38">
    <div class="full-slider slick-initialized slick-slider" data-reactid="39">
      <div aria-live="polite" class="slick-list draggable" style="height: 944px;">
        <div class="slick-track" style="opacity: 1; width: 1590px;" role="listbox">
          <div class="slide bg-image canvas-slide slick-slide slick-current slick-active" data-image="fontend/imgs/bg4.jpg" data-reactid="40" data-slick-index="0" aria-hidden="false" style="width: 1590px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1; background-image: url(&quot;fontend/imgs/bg4.jpg&quot;);" tabindex="-1" role="option" aria-describedby="slick-slide00">
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
                    <div class="buttons-download text-center" data-reactid="331"><a href="{{ route('signout') }}" class="download anim-shadow" data-reactid="332"><i class="fas fa-sign-in-alt"></i><span data-reactid="334"><span data-reactid="335">Đăng ký</span>Tài khoản</span></a>
                        <a
                          href="{{ route('signin') }}" target="_blank" class="download anim-shadow" data-reactid="337"><i class="fas fa-sign-out-alt"></i><span data-reactid="339"><span data-reactid="340">Đăng nhập</span>
                          Hệ thống
                          </span>
                          </a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="particles-js" class="canvas-background" data-reactid="66">
              <canvas class="pg-canvas" style="display: block;" width="1590" height="944"></canvas>
            </div>
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
              <div class="icon icon-circle" data-reactid="86"><i class="fas fa-check"></i></div>
            </div>
            <h3 data-reactid="88">Tổng hợp đơn hàng</h3>
            <p data-reactid="89">Xem lại lịch sử tất cả đơn hàng mà bạn đã từng đăng tìm Shipper trừ trước đến nay</p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 item-icon" data-reactid="90">
            <div class="icon-container" data-reactid="91">
              <div class="icon icon-circle" data-reactid="92"><i class="fas fa-save"></i></div>
            </div>
            <h3 data-reactid="94">Báo Cáo</h3>
            <p data-reactid="95">Quản lý những đơn hàng.Xuất báo cáo Excel theo ngày, tuần và tháng</p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 item-icon" data-reactid="96">
            <div class="icon-container" data-reactid="97">
              <div class="icon icon-circle" data-reactid="98"><i class="fab fa-telegram-plane"></i></div>
            </div>
            <h3 data-reactid="100">Dịch vụ nhanh</h3>
            <p data-reactid="101">Shipper gần bạn nhất được chọn đến lấy hàng và giao hàng ngay lập tức </p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 item-icon" data-reactid="102">
            <div class="icon-container" data-reactid="103">
              <div class="icon icon-circle" data-reactid="104"><i class="far fa-comment-alt"></i></div>
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
              <p data-reactid="114" style="opacity: 1;" class="animated fadeInUp">Cung cấp giải pháp quản lý đơn hàng toàn diện cho chủ Shop bán hàng và Shipper. Rút ngắn thời gian nhận đơn, giao đơn hàng hàng, đưa ra quãng đường ngắn nhất và nhanh nhất cho Shipper. Tiết kiệm thời gian tìm shipper dành cho chủ shop. </p>
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
                <div class="item-icon text-left" data-reactid="123"><span class="icon-wrap icon-services" data-reactid="124"><i class="fas fa-map-marker-alt"></i></span></div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" data-reactid="126">
            <div class="section-class-image text-center" data-reactid="127"><img class="inamauee animated fadeInUp" src="fontend/imgs/blue.png" alt="iPhone" data-reactid="128" style="opacity: 1;"></div>
          </div>
          <div class="col-md-4 col-sm-6" data-reactid="129">
            <div class="items-left" data-reactid="130">
              <div class="section-class-item" data-reactid="131">
                <div class="item-icon text-right" data-reactid="132"><span class="icon-wrap icon-services" data-reactid="133"><i class="fas fa-clipboard-list"></i></span></div>
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
                  <div class="item-icon text-right" data-reactid="144"><span class="icon-wrap" data-reactid="145"><i class="fas fa-cloud-download-alt"></i></span></div>
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
                  <div class="item-icon text-left" data-reactid="158"><span class="icon-wrap" data-reactid="159"><i class="fas fa-piggy-bank"></i></span></div>
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
                <div class="item-icon text-left" data-reactid="169"><span class="icon-wrap icon-services" data-reactid="170"><i class="fas fa-users"></i></span></div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-md-push-4" data-reactid="172">
            <div class="items-left" data-reactid="173">
              <div class="section-class-item" data-reactid="174">
                <div class="item-icon text-left" data-reactid="175"><span class="icon-wrap icon-services" data-reactid="176"><i class="fas fa-motorcycle"></i></span></div>
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
          <div class="iphone-nalf animated fadeInUp" data-reactid="190" style="opacity: 1;"><img src="fontend/imgs/blue.png" alt="iphone" data-reactid="191"></div>
        </div>
        <div class="col-md-4 col-md-pull-4 col-sm-6 col-xs-12" data-reactid="192">
          <div class="section-className-item icon-circle-border" data-reactid="193">
            <div class="item-icon" data-reactid="194"><span class="icon-wrap icon-services" data-reactid="195"><i class="fas fa-desktop"></i></span></div>
            <div class="item-text text-left" data-reactid="197">
              <h3 data-reactid="198">Hỗ trợ trên mọi thiết bị</h3>
              <p data-reactid="199">Giúp bạn tổng hợp đơn hàng ở mọi lúc mọi nơi, hỗ trợ trên mọi thiết bị.</p>
            </div>
          </div>
          <div class="section-className-item icon-circle-border" data-reactid="200">
            <div class="item-icon" data-reactid="201"><span class="icon-wrap icon-services" data-reactid="202"><i class="fas fa-leaf"></i></span></div>
            <div class="item-text text-left" data-reactid="204">
              <h3 data-reactid="205">Đơn giản dễ sử dụng</h3>
              <p data-reactid="206">Tất cả các thao tác nhận và trả lời đơn hàng chỉ bằng một click</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-md-pull-4 col-sm-6 col-xs-12" data-reactid="207">
          <div class="section-className-item icon-circle-border" data-reactid="208">
            <div class="item-icon" data-reactid="209"><span class="icon-wrap icon-services" data-reactid="210"><i class="far fa-lightbulb"></i></span></div>
            <div class="item-text text-left" data-reactid="212">
              <h3 data-reactid="213">Thiết kế hoàn hảo</h3>
              <p data-reactid="214">Tinh tế và hướng đến người sử dụng</p>
            </div>
          </div>
          <div class="section-className-item icon-circle-border" data-reactid="215">
            <div class="item-icon" data-reactid="216"><span class="icon-wrap icon-services" data-reactid="217"><i class="fas fa-th"></i></span></div>
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
                  <div class="item-testimonials" data-reactid="243"><img src="fontend/imgs/ava3.jpg" alt="photo" data-reactid="244">
                    <p data-reactid="245">Lấy đơn hàng nhanh, thích nhất chức năng gọi ngay và chức năng SMS. Từ khi dùng App và web đơn hàng tăng lên mỗi ngày</p><span data-reactid="246">Phạm Văn Khắc</span></div>
                </div>
                <div class="col-md-4 slick-slide slick-cloned" data-reactid="247" data-slick-index="-2" aria-hidden="true" style="width: 390px;" tabindex="-1">
                  <div class="item-testimonials" data-reactid="248"><img src="fontend/imgs/ava4.jpg" alt="photo" data-reactid="249">
                    <p data-reactid="250">Mình là chủ shop. Mình sử dụng săn ship để tìm shipper nhanh hơn. Mình thích nhất chức năng đăng bài của APP. Chỉ cần đăng một lần nhưng lại đăng được lên tất cả các group mình muốn</p><span data-reactid="251">Bảo Ngọc</span></div>
                </div>
                <div class="col-md-4 slick-slide slick-cloned" data-reactid="252" data-slick-index="-1" aria-hidden="true" style="width: 390px;" tabindex="-1">
                  <div class="item-testimonials" data-reactid="253"><img src="fontend/imgs/ava5.jpg" alt="photo" data-reactid="254">
                    <p data-reactid="255">Tuyệt vời, từ lúc sử dụng App đơn hàng tăng lên nhiều. Ngoài ra quản lý doanh thu theo ngày cũng tốt</p><span data-reactid="256">Phạm Lan Anh</span></div>
                </div>
                <div class="col-md-4 slick-slide" data-reactid="232" data-slick-index="0" aria-hidden="true" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide10">
                  <div class="item-testimonials" data-reactid="233"><img src="fontend/imgs/ava.jpg" alt="photo" data-reactid="234">
                    <p data-reactid="235">Cảm thấy hài lòng. Nhưng mong là có ứng dụng cho cả window phone nữa thì tuyệt vời. Mong ngày càng nhiều chức năng hay hơn</p><span data-reactid="236">Phạm Thư</span></div>
                </div>
                <div class="col-md-4 slick-slide slick-current slick-active" data-reactid="237" data-slick-index="1" aria-hidden="false" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide11">
                  <div class="item-testimonials" data-reactid="238"><img src="fontend/imgs/ava2.jpg" alt="photo" data-reactid="239">
                    <p data-reactid="240">Mình mở văn phòng ship. Nếu không có ứng này, không biết bên mình tổng hợp đơn hàng thế nào nữa. Cảm ơn các bạn đã làm ra ứng dụng này</p><span data-reactid="241">Nguyễn Mạnh Quân</span></div>
                </div>
                <div class="col-md-4 slick-slide slick-active" data-reactid="242" data-slick-index="2" aria-hidden="false" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide12">
                  <div class="item-testimonials" data-reactid="243"><img src="fontend/imgs/ava3.jpg" alt="photo" data-reactid="244">
                    <p data-reactid="245">Lấy đơn hàng nhanh, thích nhất chức năng gọi ngay và chức năng SMS. Từ khi dùng App và web đơn hàng tăng lên mỗi ngày</p><span data-reactid="246">Phạm Văn Khắc</span></div>
                </div>
                <div class="col-md-4 slick-slide slick-active" data-reactid="247" data-slick-index="3" aria-hidden="false" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide13">
                  <div class="item-testimonials" data-reactid="248"><img src="fontend/imgs/ava4.jpg" alt="photo" data-reactid="249">
                    <p data-reactid="250">Mình là chủ shop. Mình sử dụng săn ship để tìm shipper nhanh hơn. Mình thích nhất chức năng đăng bài của APP. Chỉ cần đăng một lần nhưng lại đăng được lên tất cả các group mình muốn</p><span data-reactid="251">Bảo Ngọc</span></div>
                </div>
                <div class="col-md-4 slick-slide" data-reactid="252" data-slick-index="4" aria-hidden="true" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide14">
                  <div class="item-testimonials" data-reactid="253"><img src="fontend/imgs/ava5.jpg" alt="photo" data-reactid="254">
                    <p data-reactid="255">Tuyệt vời, từ lúc sử dụng App đơn hàng tăng lên nhiều. Ngoài ra quản lý doanh thu theo ngày cũng tốt</p><span data-reactid="256">Phạm Lan Anh</span></div>
                </div>
                <div class="col-md-4 slick-slide slick-cloned" data-reactid="232" data-slick-index="5" aria-hidden="true" style="width: 390px;" tabindex="-1">
                  <div class="item-testimonials" data-reactid="233"><img src="fontend/imgs/ava.jpg" alt="photo" data-reactid="234">
                    <p data-reactid="235">Cảm thấy hài lòng. Nhưng mong là có ứng dụng cho cả window phone nữa thì tuyệt vời. Mong ngày càng nhiều chức năng hay hơn</p><span data-reactid="236">Phạm Thư</span></div>
                </div>
                <div class="col-md-4 slick-slide slick-cloned" data-reactid="237" data-slick-index="6" aria-hidden="true" style="width: 390px;" tabindex="-1">
                  <div class="item-testimonials" data-reactid="238"><img src="fontend/imgs/ava2.jpg" alt="photo" data-reactid="239">
                    <p data-reactid="240">Mình mở văn phòng ship. Nếu không có ứng này, không biết bên mình tổng hợp đơn hàng thế nào nữa. Cảm ơn các bạn đã làm ra ứng dụng này</p><span data-reactid="241">Nguyễn Mạnh Quân</span></div>
                </div>
                <div class="col-md-4 slick-slide slick-cloned" data-reactid="242" data-slick-index="7" aria-hidden="true" style="width: 390px;" tabindex="-1">
                  <div class="item-testimonials" data-reactid="243"><img src="fontend/imgs/ava3.jpg" alt="photo" data-reactid="244">
                    <p data-reactid="245">Lấy đơn hàng nhanh, thích nhất chức năng gọi ngay và chức năng SMS. Từ khi dùng App và web đơn hàng tăng lên mỗi ngày</p><span data-reactid="246">Phạm Văn Khắc</span></div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </section>
  <section class="what-did" data-reactid="263">
    <div class="container" data-reactid="264">
      <div class="row" data-reactid="265">
        <div class="col-md-5" data-reactid="266">
          <div class="iphones-section" data-reactid="267">
            <div class="iphones" data-reactid="268"><img class="left-mob-front" src="fontend/imgs/Iphone-mob-front.png" alt="iphone" data-reactid="269"><img class="left-mob-back animated fadeInUp" src="fontend/imgs/Iphone-mob-back.png" alt="iphone" data-reactid="270" style="opacity: 1;"></div>
          </div>
        </div>
        <div class="col-md-6 col-md-push-1" data-reactid="271">
          <div class="heading-title text-left" data-reactid="272">
            <h2 data-reactid="273" style="opacity: 1;" class="animated fadeInDown">Những lý do nên sử dụng Săn Ship</h2>
            <p data-reactid="274" style="opacity: 1;" class="animated fadeInUp">Tiện lợi, nhanh chóng, hiệu quả và tiết kiệm.</p>
          </div>
          <div class="section-icon-text text-with-icon" data-reactid="275">
            <div class="section-className-item" data-reactid="276">
              <div class="item-icon" data-reactid="277"><span class="icon-wrap" data-reactid="278"><i class="fas fa-check" data-reactid="279"></i></span></div>
              <div class="item-text text-left" data-reactid="280">
                <p data-reactid="281">Tất cả các đơn hàng được tổng trên một màn hình duy nhất</p>
              </div>
            </div>
          </div>
          <div class="section-icon-text text-with-icon" data-reactid="282">
            <div class="section-className-item" data-reactid="283">
              <div class="item-icon" data-reactid="284"><span class="icon-wrap" data-reactid="285"><i class="fas fa-check" data-reactid="286"></i></span></div>
              <div class="item-text text-left" data-reactid="287">
                <p data-reactid="288">Gọi điện ngay cho người tạo đơn hàng chỉ với một click</p>
              </div>
            </div>
          </div>
          <div class="section-icon-text text-with-icon" data-reactid="289">
            <div class="section-className-item" data-reactid="290">
              <div class="item-icon" data-reactid="291"><span class="icon-wrap" data-reactid="292"><i class="fas fa-check" data-reactid="293"></i></span></div>
              <div class="item-text text-left" data-reactid="294">
                <p data-reactid="295">Thời gian có đơn hàng mới không quá 3 giây</p>
              </div>
            </div>
          </div>
          <div class="section-icon-text text-with-icon" data-reactid="296">
            <div class="section-className-item" data-reactid="297">
              <div class="item-icon" data-reactid="298"><span class="icon-wrap" data-reactid="299"><i class="fas fa-check" data-reactid="300"></i></span></div>
              <div class="item-text text-left" data-reactid="301">
                <p data-reactid="302">Dữ liệu được lấy từ tất cả các shop trên toàn quốc và cập nhật liên tục</p>
              </div>
            </div>
          </div>
          <div class="section-icon-text text-with-icon" data-reactid="303">
            <div class="section-className-item" data-reactid="304">
              <div class="item-icon" data-reactid="305"><span class="icon-wrap" data-reactid="306"><i class="fas fa-check" data-reactid="307"></i></span></div>
              <div class="item-text text-left" data-reactid="308">
                <p data-reactid="309">Tương tác với các mạng xã hội và các group lớn nhanh nhất</p>
              </div>
            </div>
          </div>
          <div class="section-icon-text text-with-icon" data-reactid="310">
            <div class="section-className-item" data-reactid="311">
              <div class="item-icon" data-reactid="312"><span class="icon-wrap" data-reactid="313"><i class="fas fa-check" data-reactid="314"></i></span></div>
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
@endsection
