<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeValueRequest;
use App\Models\AttributeGroup;
use App\Models\AttributeValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AttributeValueController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributesvalue=AttributeValue::with('attributeGroup')->paginate(10);
        return view('Admin.attribute-value.index',compact('attributesvalue'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attributesGroup=AttributeGroup::all();
        return view('Admin.attribute-value.create',compact('attributesGroup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttributeValueRequest $request)
    {
        try{
            $attributevalue=new AttributeValue();
            $attributevalue->title=$request->input('title');
            $attributevalue->attributeGroup_id=$request->input('attributeGroup_id');
            $attributevalue->save();
            Session::flash('attribute-value','مقدار ویژگی با موفقیت ثبت شد');
            return redirect('/admin/attributes-value');
        }
        catch (\Exception $m){
            Session::flash('attribute_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/attributes-value');
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
        $attributeValue=AttributeValue::with('attributeGroup')->whereId($id)->first();
        $attributesGroup=AttributeGroup::all();
        return view('Admin.attribute-value.edit',compact('attributeValue','attributesGroup'));
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
            'title' => 'required|max:255',
            'attributeGroup_id' => 'required',
        ]);
        try{
            $attributevalue=AttributeValue::findorfail($id);
            $attributevalue->title=$request->input('title');
            $attributevalue->attributeGroup_id=$request->input('attributeGroup_id');
            $attributevalue->save();
            Session::flash('attribute-value_success','مقدار ویژگی با موفقیت بروز شد');
            return redirect('/admin/attributes-value');
        }
        catch (\Exception $m){
            Session::flash('attribute-value_error','خطایی در ,یرایش به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/attributes-value');
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
            $attributevalue=AttributeValue::findorfail($id);
            $attributevalue->delete();
            Session::flash('attribute-value_success','مقدار ویژگی با موفقیت حذف شد');
            return redirect('/admin/attributes-value');}
        catch (\Exception $m) {
            Session::flash('attribute-value_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/admin/attributes-value');
        }
    }
}
