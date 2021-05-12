@extends('Admin.master')
@section('content')
    <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">لیست شهرها</h3>
                            <a class="btn btn-primary" style="left: 0%; position: absolute;" href="{{route('city.create')}}"> افزودن شهر</a>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>نام</th>
                                    <th>استان</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cities as $city)
                                    <tr>
                                        <td>{{$city->index+1}}</td>
                                        <td>{{$city->name}}</td>
                                        <td>{{$city->province->name}}</td>
                                        <td><form action="{{route('city.destroy' ,[$city->id])}}" method="post">
                                            {{method_field('delete')}}
                                            {{csrf_field()}}
                                            <dev class="btn-group btn-grop-xs">
                                                <a class="btn btn-primary" href="{{route('city.edit' , $city->id)}}">ویرایش</a>
                                                <button type="submit" class="btn btn-danger">حذف</button>
                                            </dev>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('scr')
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
@endsection
