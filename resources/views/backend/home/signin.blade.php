@extends('backend.base.base_account') 
@section('title', 'Đăng nhập')
@section('content')
<div class="page-sign">
  <form class="form-sign">
    <h1 class="display-4 text-center mb-5">Đăng nhập</h1>
    <div class="form-group">
      <div class="label-floating">
        <input id="username" type="text" class="form-control" placeholder="E-mail" maxlength="50" autofocus>
        <label for="username">E-mail</label>
      </div>
    </div>
    <div class="form-group">
      <div class="label-floating">
        <input id="password" type="password" class="form-control" placeholder="Password" maxlength="20">
        <label for="password">Mật khẩu</label>
      </div>
    </div><a href="../../index.html" class="btn btn-lg btn-primary btn-block">Đăng nhập</a>
    <div class="mt-3 mb-3 text-center">
      <p class="mb-4"><a href="#">Quên mật khẩu</a></p>
      <hr>
      <p class="mt-4">
        <label class="text-muted">Bạn chưa có tài khoản?</label> <a href="../../pages/content/signup.html">Đăng ký</a></p>
    </div>
  </form>
</div>
@endsection
