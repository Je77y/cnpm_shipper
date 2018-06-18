@extends('backend.base.base_account') @section('title', 'Đăng ký') @section('content')
<div class="page-sign">
  <form class="form-sign">
    <h1 class="display-4 text-center mb-5">Đăng ký</h1>
    <div class="form-group">
      <div class="label-floating">
        <input id="username" type="text" class="form-control" placeholder="Tên tài khoản" maxlength="50" autofocus>
        <label for="username">Tên tài khoản</label>
      </div>
    </div>
    <div class="form-group">
      <div class="label-floating">
        <input id="email" type="text" class="form-control" placeholder="E-mail" maxlength="50">
        <label for="email">E-mail</label>
      </div>
    </div>
    <div class="form-group">
      <div class="label-floating">
        <input id="password" type="password" class="form-control" placeholder="Mật khẩu" maxlength="20">
        <label for="password">Mật khẩu</label>
      </div>
    </div>
    <div class="form-group">
      <select class="form-control">
        <option>Chọn khu vực</option>
        <option>Hà Nội</option>
        <option>Hồ Chí Minh</option>
      </select>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-block">Đăng ký</a>
    <div class="mt-3 mb-3 text-center">
      <p class="mb-4">Bằng cách tạo tài khoản, bạn đồng ý với <a href="#">Điều khoản sử dụng</a>.</p>
      <hr>
      <p class="mt-4">
        <label class="text-muted">Bạn đã có tài khoản?</label> <a href="../../pages/content/signin.html">Sign in</a></p>
    </div>
  </form>
</div>
@endsection
