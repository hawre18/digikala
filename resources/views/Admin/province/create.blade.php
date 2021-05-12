@extends('Admin.master')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <form role="form"class="form-horizontal" action="{{route('province.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include('Admin.errors')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">نام استان</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="نام استان را وارد کنید" value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection