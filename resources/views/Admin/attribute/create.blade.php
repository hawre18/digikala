@extends('Admin.master')
@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ایجاد گروه ویژگی ها</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        @include('Admin.errors')
                        <form method="post" action="\admin\attributes">
                            @csrf
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="عنوان ویژگی ها">
                            </div>
                            <div class="form-group">
                                <label for="type">نوع</label>
                                <select name="type" class="form-control">
                                    <option value="select">لیست تکی</option>
                                    <option value="multiple">لیست چندتایی</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
