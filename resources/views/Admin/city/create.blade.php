@extends('Admin.master')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <form role="form"class="form-horizontal" action="{{route('city.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include('Admin.errors')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">نام شهر</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="نام شهر را وارد کنید" value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">نام شهر</label>
                            <select name="province_id" class="form-control" >
                                @foreach($provinces as $province)
                                    <option selected disabled>انتخاب کنید</option>
                                    <option value="{{$province->id}}")>{{$province->name}}</option>
                                @endforeach
                            </select>
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