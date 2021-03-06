@extends('Admin.master')
@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ویرایش مقدار ویژگی</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                       @include('Admin.errors')
                        <form method="post" action="\admin\attributes-value\{{$attributeValue->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input type="text" name="title" class="form-control" value="{{$attributeValue->title}}">
                            </div>
                            <div class="form-group">
                                <label for="attributeGroup_id">نوع ویژگی</label>
                                <select name="attributeGroup_id" class="form-control">
                                    <option value="">انتخاب کنید</option>
                                    @foreach($attributesGroup as $attribute)
                                        <option value="{{$attribute->id}}" @if($attributeValue->attributegroup->id==$attribute->id) selected @endif>{{$attribute->title}}</option>
                                    @endforeach
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
