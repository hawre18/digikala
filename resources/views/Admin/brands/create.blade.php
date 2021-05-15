@extends('Admin.master')
@section('content')
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ایجاد برند جدید</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        @include('Admin.errors')
                        <form id="myForm" method="post" action="/admin/brands">
                            @csrf
                            <div class="form-group">
                                <label for="title">نام</label>
                                <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="نام برند را وارد کنید...">
                            </div>

                            <div class="form-group">
                                <label for="description">توضیحات</label>
                                <textarea type="text" name="description" value="{{old('description')}}" class="form-control" placeholder="توضیحات برند را وارد کنید..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="photo">تصویر</label>
                                <input type="hidden" name="photo_id" id="brand-photo">
                                <div id="photo" class="dropzone"></div>
                            </div>

                            <button type="submit" class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection


