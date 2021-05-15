@extends('Admin.master')
@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">کوپن ها</h3>
                <div class="text-left">
                    <a class="btn btn-app"  href="{{route('coupons.create')}}">
                        <i class="fa fa-plus"></i> جدید
                    </a>
                </div>
            </div>
            <div class="box-body">
                @include('Admin.errors')
                <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th class="text-center">شناسه</th>
                                <th class="text-center">عنوان تخفیف</th>
                                <th class="text-center">کد تخفیف</th>
                                <th class="text-center">مقدار تخفیف</th>
                                <th class="text-center">وضعیت</th>
                                <th class="text-center">تغییر وضعیت</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($coupons as $coupon)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{$coupon->title}}</td>
                                    <td class="text-center">{{$coupon->code}}</td>
                                    <td class="text-center">{{$coupon->price}}</td>
                                    @if($coupon->status==0)
                                        <td class="text-center"><span class="label label-danger">غیرفعال</span></td>
                                        <td class="text-center"><a class="btn btn-success" href="{{route('coupon.action',[$coupon->id,$status=1])}}">فعال کردن</a></td>
                                    @else
                                        <td class="text-center"><span class="label label-success">فعال</span></td>
                                       <td class="text-center"><a class="btn btn-danger" href="{{route('coupon.action',[$coupon->id,$status=0])}}">غیرفعال کردن</a></td>
                                    @endif
                                        <td class="text-center">
                                         <a class="btn btn-warning" href="{{route('coupons.edit',$coupon->id)}}">ویرایش</a>
                                         <a class="btn btn-danger" href="{{route('coupons.delete',$coupon->id)}}">حذف</a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                    <div class="center-block text-center">{{ $coupons->links() }}</div>
            </div>
        </div>
    </section>
@endsection
