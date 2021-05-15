@extends('Admin.master')
@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">مقدار ویژگی</h3>
                <div class="text-left">
                    <a class="btn btn-app"  href="{{route('attributes-value.create')}}">
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
                                <th class="text-center">عنوان</th>
                                <th class="text-center">ویژگی</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($attributesvalue as $attributevalue)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{$attributevalue->title}}</td>
                                    <td class="text-center">{{$attributevalue->attributeGroup['title']}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="{{route('attributes-value.edit',$attributevalue->id)}}">ویرایش</a>
                                        <a class="btn btn-danger" href="{{route('attributes-value.delete',$attributevalue->id)}}">حذف</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
                    <div class="center-block text-center">{{ $attributesvalue->links() }}</div>
            </div>
        </div>
    </section>
@endsection
