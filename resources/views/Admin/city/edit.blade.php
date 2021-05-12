@extends('Admin.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card-header">
            <h2>ویرایش استان</h2>
        </div>
        <form class="form-horizontal" action="{{ route('city.update' , $city->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            @include('Admin.errors')
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="name" class="control-label">نام شهر</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام شهر را وارد کنید" value="{{ $city->name }}">
                </div>
                <div class="form-group">
                <div class="col-sm-12">
                    <label for="name" class="control-label">نام استان</label>
                    <select name="province_id" class="form-control" >
                        @foreach($provinces as $province)
                            <option value="{{$province->id}}") @if($city->province->id==$province->id) selected @endif>{{$province->name}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-danger">ارسال</button>
                </div>
            </div>
        </form>
    </main>
@endsection