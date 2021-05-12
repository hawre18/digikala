@extends('Admin.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card-header">
            <h2>ویرایش استان</h2>
        </div>
        <form class="form-horizontal" action="{{ route('province.update' , $province->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            @include('Admin.errors')
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="name" class="control-label">نام استان</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام استان را وارد کنید" value="{{ $province->name }}">
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