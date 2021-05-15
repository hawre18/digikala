@extends('Admin.master')
@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ویرایش کوپن</h3>
            </div>
            <div class="box-body">
                @include('Admin.errors')
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="\admin\coupons\{{$coupon->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="form-group">
                                <label for="title">عنوان تخفیف</label>
                                <input type="text" name="title" class="form-control" placeholder="عنوان تخفیف" value="{{$coupon->title}}">
                            </div>
                            <div class="form-group">
                                <label for="code">کدتخفیف</label>
                                <input type="text" name="code" class="form-control" placeholder="کد تخفیف" value="{{$coupon->code}}">
                            </div>
                            <div class="form-group">
                                <label for="price">مقدار تخفیف</label>
                                <input type="number" name="price" class="form-control" placeholder="مقدار تخفیف" value="{{$coupon->price}}">
                            </div>
                            <div class="form-group required">
                                <label for="input-gender" class="col-sm-2 control-label">وضعیت</label>
                                    <input type="radio" name="status" value="1" @if($coupon->status==1) checked @endif><span>منتشر شده</span>
                                    <input type="radio" name="status" value="0"@if($coupon->status==0) checked @endif><span>منتشر نشده</span>
                            </div>
                            <button type="submit" class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

