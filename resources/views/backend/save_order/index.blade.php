@extends('backend.base.layout') @section('title', 'Đơn hàng đã lưu') @section('content')
<div class="container-fluid mt-5">
  <h1>Danh sách đơn hàng đã lưu </h1>
  <a href="{{ route('admin.save_order.filterSaveOrder') }}" class="btn btn-primary mb-2">Lọc đơn hàng</a>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>STT</th>
          <th>Thời gian</th>
          <th>Vị trí</th>
          <th>Mô tả</th>
          <th>Trạng thái</th>
          <th>Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        @foreach($lsSaveOrder as $saveOrder)
        <tr>
          <th><?php echo ($i++); ?></th>
          <td>{{ $saveOrder->created_at->diffForHumans() }}</td>
          <td>{{ $saveOrder->address }}</td>
          <td>{{ $saveOrder->describe }}</td>
          <td>
            @if($saveOrder->active)
            <span class="badge badge-primary">Đã nhận</span>
            @else
            <span class="badge badge-secondary">Chưa nhận</span>
            @endif
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
                <a class="dropdown-item" href="{{ route('admin.save_order.remove', $saveOrder->id) }}">Hủy bỏ</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
