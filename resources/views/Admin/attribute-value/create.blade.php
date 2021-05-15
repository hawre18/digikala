@extends('Admin.master')

@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ایجاد مقدار ویژگی ها</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        @include('Admin.errors')
                        <form method="post" action="\admin\attributes-value">
                            @csrf
                            <div class="form-group">
                                <label for="attributeGroup_id">لیست ویژگی ها</label>
                                <select name="attributeGroup_id" class="form-control">
                                    <option value="">انتخاب کنید</option>
                                    @foreach($attributesGroup as $attributeGroup)
                                        <option value="{{$attributeGroup->id}}" @if($attributeGroup->id == old('$attribute_group')) selected @endif>{{$attributeGroup->title}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="مقدار ویژگی ها">
                            </div>
                            <button type="submit" class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
