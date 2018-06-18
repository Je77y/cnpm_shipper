<div class="app-sidebar sidebar-slide-left">
  <div class="text-right">
    <button type="button" class="btn btn-sidebar" data-dismiss="sidebar"><span class="x"></span></button>
  </div>
  <div class="sidebar-header"><img src="backend/img/ava.jpg" class="user-photo">
    <p class="username">John Doe
      <br><small>Administrator</small></p>
  </div>
  <ul class="sidebar-nav">
    <li class="sidebar-nav-btn">
      <a href="#" class="btn btn-block btn-outline-light">
      <i class="fas fa-user-cog"></i> Cập nhật
      </a>
    </li>
    <li class="sidebar-nav-group "><a href="{{ route('admin.home') }}" class="sidebar-nav-link"><i class="fas fa-clipboard-list"></i> Đơn hàng</a>
    </li>
    <li class="sidebar-nav-group"><a href="{{ route('admin.shop') }}" class="sidebar-nav-link"><i class="fas fa-shopping-cart"></i> Shop ruột</a>
    </li>
    <li class="sidebar-nav-group"><a href="{{ route('admin.save_order') }}" class="sidebar-nav-link"><i class="fas fa-save"></i> Lưu trữ</a>
    </li>
    <li class="sidebar-nav-group"><a href="{{ route('admin.transaction_history') }}" class="sidebar-nav-link"><i class="fas fa-history"></i> Lịch sử giao dịch</a>
    </li>
  </ul>
  <div class="sidebar-footer">
    <a href="{{ route('signin') }}" data-toggle="tooltip" title="Logout">
            <i class="fas fa-power-off"></i>
          </a>
  </div>
</div>
