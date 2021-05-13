@extends('.auth.seller.master')
@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>ثبت نام در سایت</b></a>
        </div>
        <div class="register-box-body">
            <p class="login-box-msg">ثبت نام کاربر جدید</p>
            <form  method="post"action="{{ route('sendercode') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="text" name="sellerCode[]" class="form-control hidden" value="{{$code}}" placeholder="انتخاب تصویر">
                <div class="form-group has-feedback">
                    <label>تصویر روی کارت ملی</label>
                    <input type="file" name="photonational" class="form-control" placeholder="انتخاب تصویر">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>تصویر پشت کارت ملی</label>
                    <input type="file" name="photoDouc" class="form-control" placeholder="انتخاب تصویر">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>تصویر برگه های مالیاتی( در صورت مشمولیت)</label>
                    <input type="file" name="photoDouc" class="form-control" placeholder="انتخاب تصویر">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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