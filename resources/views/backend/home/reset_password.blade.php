@extends('backend.base.base_account') 
@section('title', 'Quên mật khẩu')
@section('content')
<div class="page-sign">
  <form class="form-sign">
    <h1 class="display-5 text-center mb-5">Quên mật khẩu</h1>
    <div class="form-group">
      <div class="label-floating">
        <input id="username" type="text" class="form-control" placeholder="E-mail" maxlength="50" autofocus>
        <label for="username">E-mail</label>
      </div>
    </div>
    <a href="../../index.html" class="btn btn-lg btn-primary btn-block">Gửi</a>
    <div class="mt-3 mb-3 text-center">
      <p class="mb-4"><a href="{{ route('signin') }}">Quay lại trang đăng nhập</a></p>
      <hr>
      <p class="mt-4">
        <label class="text-muted">Bạn chưa có tài khoản?</label> <a href="{{ route('signout') }}">Đăng ký</a></p>
    </div>
  </form>
</div>
@endsection
