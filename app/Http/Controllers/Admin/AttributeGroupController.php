<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeGroupRequest;
use App\Models\AttributeGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AttributeGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes=AttributeGroup::paginate(10);
        return view('Admin.attribute.index',compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.attribute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributeGroupRequest $request)
    {
        try{
            $attribute=new AttributeGroup();
            $attribute->title=$request->input('title');
            $attribute->type=$request->input('type');
            $attribute->save();
            Session::flash('attribute_success','ویژگی با موفقیت ثبت شد');
            return redirect('/admin/attributes');}
        catch (\Exception $m){
            Session::flash('attribute_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/attributes');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attribute=AttributeGroup::findorfail($id);
        return view('Admin.attribute.edit',compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:attributesgroup,title,' . $id .'|max:255',
        ]);
        try
        {
            $attribute=AttributeGroup::findorfail($id);
            $attribute->title=$request->input('title');
            $attribute->type=$request->input('type');
            $attribute->save();
            Session::flash('attribute','ویژگی '.$attribute->title.' با موفقیت بروزرسانی شد');
            return redirect('/admin/attributes');}
        catch (\Exception $m){
            Session::flash('attribute_error','خطایی در بروز رسانی وجود دارد لطفا مجددا تلاش کنید');
            return redirect('/admin/attributes');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id)
    {
        try{
            $attribute=AttributeGroup::findorfail($id);
            $attribute->delete();
            Session::flash('attribute','ویژگی با موفقیت حذف شد');
            return redirect('/admin/attributes');}
        catch (\Exception $m){
            Session::flash('attribute_error','حذف صورت نگرفت');
            return redirect('/admin/attributes');
        }

    }
}
