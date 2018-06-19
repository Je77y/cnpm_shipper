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
      <a href="#" class="btn btn-block btn-outline-light" data-toggle="modal" data-target="#exampleModal">
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cập nhật</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="sidebar-header"><img src="backend/img/ava.jpg" class="user-photo">
            <p class="username">John Doe
              <br><small>Administrator</small></p>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">SDT:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary">Cập nhật</button>
        </div>
      </div>
    </div>
  </form>
</div>
