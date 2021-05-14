@extends('Seller.auth.master')
@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>ثبت نام در سایت</b></a>
    </div>
    <div class="register-box-body">
        <p class="login-box-msg">ثبت نام کاربر جدید</p>
        <form  method="post"action="{{ route('codeaccept') }}">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="ایمیل" value="{{$email}}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                    <input type="text" class="form-control"  name="numberOne" >
                    <input type="text" class="form-control"  name="numberTow" >
                    <input type="text" class="form-control"  name="numberThree" >
                    <input type="text" class="form-control"  name="numberFour" >
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
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