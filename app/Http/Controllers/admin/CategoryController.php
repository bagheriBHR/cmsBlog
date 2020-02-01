<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::paginate(2);
        return view('admin.category.index',compact(['categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category=new Category();
        $category->title=$request->title;
        if($request->slug){
            $category->slug=make_slug($request->slug);
        }else{
            $category->slug=make_slug($request->title);
        }
        $category->meta_description=$request->meta_description;
        $category->meta_keywords=$request->meta_keywords;
        $category->save();
        Session::flash('category_add', 'دسته بندی با موفقیت اضافه شد.');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.category.edit',compact(['category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request,$id)
    {
        $category=Category::find($id);
        $category->title=$request->title;
        if($request->slug){
            $category->slug=make_slug($request->slug);
        }else{
            $category->slug=make_slug($request->title);
        }
        $category->meta_description=$request->meta_description;
        $category->meta_keywords=$request->meta_keywords;
        $category->save();
        Session::flash('category_update', 'دسته بندی با موفقیت ویرایش شد.');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $category=Category::find($id)->delete();
        Session::flash('category_delete', 'دسته بندی با موفقیت حذف گردید.');
        return redirect()->route('category.index');
    }
}
