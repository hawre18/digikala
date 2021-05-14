@extends('Seller.auth.master')
@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>ثبت نام در سایت</b></a>
        </div>
        <div class="register-box-body">
            <p class="login-box-msg">ثبت نام کاربر جدید</p>
            <form  method="post"action="{{ route('documents.store')}}">
                @csrf
                <input type="text" name="sellerCode" class="form-control hidden" value="{{$code}}">
                <div class="form-group has-feedback">
                    <input type="hidden" name="photoDocu[]" id="photoDocum" class="form-control" placeholder="انتخاب تصویر">
                    <div class=" dropzone" id="photo"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" onclick="photoDocuments()" class="btn btn-primary btn-block btn-flat">ثبت نام</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
