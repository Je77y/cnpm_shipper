@extends('backend.base.layout') @section('title', 'Đơn hàng đã lưu') @section('content')
<div class="container-fluid mt-5">
  <h1>Danh sách đơn hàng đã lưu </h1>
  <button type="button" class="btn btn-primary mb-2">Lọc đơn hàng</button>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Thời gian</th>
          <th>Vị trí</th>
          <th>Mô tả</th>
          <th>Trạng thái</th>
          <th>Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Vua xong</td>
          <td>Duong 220 Co Nhue Ha Noi</td>
          <td>Minh can 1 ban len hang bo mua muc roi ship ve nguyen khoai chi minh</td>
          <td>
            <span class="badge badge-primary">Đã nhận</span>
          </td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fas fa-ellipsis-h"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Bình luận</a>
                <a class="dropdown-item" href="#">Nhận</a>
                <a class="dropdown-item" href="#">Gọi</a>
                <a class="dropdown-item" href="#">Hủy bỏ</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>Vua xong</td>
          <td>Duong 220 Co Nhue Ha Noi</td>
          <td>Minh can 1 ban len hang bo mua muc roi ship ve nguyen khoai chi minh</td>
          <td>
            <span class="badge badge-secondary">Chưa nhận</span>
          </td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fas fa-ellipsis-h"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Bình luận</a>
                <a class="dropdown-item" href="#">Nhận</a>
                <a class="dropdown-item" href="#">Gọi</a>
                <a class="dropdown-item" href="#">Hủy bỏ</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>Vua xong</td>
          <td>Duong 220 Co Nhue Ha Noi</td>
          <td>Minh can 1 ban len hang bo mua muc roi ship ve nguyen khoai chi minh</td>
          <td>
            <span class="badge badge-secondary">Chưa nhận</span>
          </td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fas fa-ellipsis-h"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Bình luận</a>
                <a class="dropdown-item" href="#">Nhận</a>
                <a class="dropdown-item" href="#">Gọi</a>
                <a class="dropdown-item" href="#">Hủy bỏ</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>Vua xong</td>
          <td>Duong 220 Co Nhue Ha Noi</td>
          <td>Minh can 1 ban len hang bo mua muc roi ship ve nguyen khoai chi minh</td>
          <td>
            <span class="badge badge-secondary">Chưa nhận</span>
          </td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fas fa-ellipsis-h"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Bình luận</a>
                <a class="dropdown-item" href="#">Nhận</a>
                <a class="dropdown-item" href="#">Gọi</a>
                <a class="dropdown-item" href="#">Hủy bỏ</a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
