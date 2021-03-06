@if(isset($selected_category))
    @foreach($categories as $sub_category)
        <option value="{{$sub_category->id}}" @if($category->parent_id==$category_data->id) selected @endif>{{str_repeat('-----',$level)}}{{$sub_category->name}}</option>
        @if(count($sub_category->childrenRecursive)>0)
            @include('Admin.partials.category',['categories'=>$sub_category->childrenRecursive, 'level'=>$level+1, 'selected_category'=>$category])
        @endif
    @endforeach
@else
    @foreach($categories as $sub_category)
        <option value="{{$sub_category->id}}">{{str_repeat('-----',$level)}}{{$sub_category->name}}</option>
        @if(count($sub_category->childrenRecursive)>0)
            @include('Admin.partials.category',['categories'=>$sub_category->childrenRecursive, 'level'=>$level+1])
        @endif
    @endforeach
@endif
