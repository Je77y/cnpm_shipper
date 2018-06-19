@extends('backend.base.layout') @section('title', 'Lịch sử giao dịch') @section('content')
<div class="container-fluid mt-5">
  <h1>Danh sách lịch sử giao dịch </h1>
  <a href="#" class="btn btn-primary mb-2">Sắp xếp</a>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>STT</th>
          <th>Thời gian giao dịch</th>
          <th>Vị trí</th>
          <th>Mô tả</th>
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
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                <i class="fas fa-ellipsis-h"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Bình luận</a>
                <a class="dropdown-item" href="{{ route('admin.save_order.remove', $saveOrder->id) }}">Xóa</a>
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
