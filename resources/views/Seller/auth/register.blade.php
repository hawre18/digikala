@extends('Seller.auth.master')
@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>ثبت نام در سایت</b></a>
    </div>
    <div class="register-box-body">
        <p class="login-box-msg">ثبت نام کاربر جدید</p>
        <form  method="post"action="{{ route('sendercode') }}">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="ایمیل">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="رمز عبور">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="phone" class="form-control" placeholder="شماره همراه">
                <input type="text" name="random" class="form-control hidden" placeholder="شماره همراه" value="{{mt_rand(1000,9999)}}">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">ثبت نام</button>
                </div>
            </div>

        </form>
        <a href="login.html" class="text-center">من قبلا ثبت نام کرده ام</a>
    </div>
</div>
@endsection