@extends('Admin.master')
@section('content')
    <section class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">گروه های ویژگی ها</h3>
                <div class="text-left">
                    <a class="btn btn-app"  href="{{route('attributes.create')}}">
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
                                <th class="text-center">نوع</th>
                                <th class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($attributes as $attribute)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{$attribute->title}}</td>
                                    <td class="text-center">{{$attribute->type}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="{{route('attributes.edit',$attribute->id)}}">ویرایش</a>
                                        <a class="btn btn-danger" href="{{route('attributes.delete',$attribute->id)}}">حذف</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
                    <div class="center-block text-center">{{ $attributes->links() }}</div>
            </div>
        </div>
    </section>
@endsection
